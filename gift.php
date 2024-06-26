<body>
<div id="my-lucky"></div>

<script src="https://unpkg.com/lucky-canvas@1.7.25"></script>
<script>
    function prize() {
        var a=0;
        a=<?php echo 5;?>
        return a;
    }
    const myLucky = new LuckyCanvas.LuckyWheel('#my-lucky', {
        width: '300px',
        height: '300px',
        blocks: [{ padding: '10px', background: '#617df2' }],
        prizes: [
            { background: '#e9e8fe', fonts: [{ text: '0' }] },
            { background: '#b8c5f2', fonts: [{ text: '1' }] },
            { background: '#e9e8fe', fonts: [{ text: '2' }] },
            { background: '#b8c5f2', fonts: [{ text: '3' }] },
            { background: '#e9e8fe', fonts: [{ text: '4' }] },
            { background: '#b8c5f2', fonts: [{ text: '5' }] },
        ],
        buttons: [{
            radius: '35%',
            background: '#8a9bf3',
            pointer: true,
            fonts: [{ text: '开始', top: '-10px' }]
        }],
        start: function () {
            // 开始游戏
            myLucky.play()
            // 使用定时器模拟接口
            setTimeout(() => {
                // 结束游戏
                myLucky.stop(prize())
            }, 3000)
        }
    })
</script>

</body>
