<?php

        // 打亂陣列
        for (var i = list.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var tmp = list[i];
            list[i] = list[j];
            list[j] = tmp;
        }

        list = list.slice(0, count);
    }

    if (list.length === 0) {
        alert('沒有 Email 可以寄送');
        return;
    }

    // 初始化
    stopFlag = false;
    document.getElementById('stopBtn').disabled = false;
    document.getElementById('progressArea').style.display = 'block';
    document.getElementById('log').innerHTML = '';
    updateProgress(0, list.length);

    // 逐筆寄送
    for (var i = 0; i < list.length; i++) {

        if (stopFlag) {
            addLog('已停止');
            break;
        }

        var to = list[i].email;

        // 送出 fetch
        var res = await fetch('send_mail.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'to=' + encodeURIComponent(to)
                + '&subject=' + encodeURIComponent(subject)
                + '&message=' + encodeURIComponent(message)
                + '&from='    + encodeURIComponent(from)
        });

        var text = await res.text();

        if (text === 'ok') {
            addLog((i+1) + '/' + list.length + ' 寄送成功：' + to);
        } else {
            addLog((i+1) + '/' + list.length + ' 寄送失敗：' + to);
        }

        updateProgress(i + 1, list.length);

        // 等待間隔
        if (i < list.length - 1 && !stopFlag) {
            var wait;
            if (isRandInt) {
                wait = (Math.floor(Math.random() * (intMax - interval + 1)) + interval) * 1000;
            } else {
                wait = interval * 1000;
            }
            addLog('等待 ' + (wait/1000) + ' 秒...');
            await sleep(wait);
        }
    }

    addLog('完成');
    document.getElementById('stopBtn').disabled = true;
}


function stopSend() {
    stopFlag = true;
    document.getElementById('stopBtn').disabled = true;
}

</script>

</body>
</html>