<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
  <style type="text/css">
      body { margin: 0px;  }  
    iframe {border: 0px; margin-top:-10px} 
        .box {height:100%;  position:absolute; width:100%;} 
    </style>
   <script type="text/javascript" src="<?php echo JS_PATH;?>xczs/js/jquery-1.8.2.min.js"></script> 
   
     <script src="<?php echo JS_PATH;?>xczs/JS/XHD.js" type="text/javascript"></script>

    <script type="text/javascript">
        var manager = ""; 
        var cid = getparastr("cid");
        var style = getparastr("style");
        var dest = getparastr("dest");
         var fid = "<?php echo $fid?>";
        var desid = getparastr("desid");
        var names = "";
        $(function () {
        if (window.postMessage) {
                var $log = $('.action-log');
                var logData = function (data) {
                   // alert($('#name').val())
                    //alert(JSON.stringify(data));
                    // if (data.type == "fp")
                    //     fid = data[data.type + 'id'];
                    // else if (data.type == "des")
                    //     desid = data[data.type + 'id'];
                 
                    // if (names == "")
                    //     gethxtmc(fid, desid,data);
                    // else {
                    //     f_save(data,fid)
                    // }
                     
                };
                var callback = function(ev) {
                    //console ? console.log(ev) : alert(ev.data);
                    logData(JSON.parse(ev.data));
                    if (ev.origin === 'http://www.kujiale.com' ||
                        ev.origin === 'http://yun.kujiale.com' ||
                        ev.origin === 'https://www.kujiale.com' ||
                        ev.origin === 'https://yun.kujiale.com') {
                        // handle message in ev ...
                        // var data = JSON.parse(ev.data)
                    }
                };
                if ('addEventListener' in document) {
                    window.addEventListener('message', callback, false);
                } else if ('attachEvent' in document) {
                    window.attachEvent('onmessage', callback);
                }
            } else {
                // 如果不支持postMessage， 则使用ie6/7的window共有属性navigator进行hack
                window.navigator.listenKJL = function(msg) {
                    alert(msg)
                    // var data = JSON.parse(msg)
                    logData(JSON.parse(msg));
                };
            }

        })



    })


 $(function () {
          
                $.ajax({
                    url: "index.php?m=kjlapi&a=login", type: "POST",
                    data: {  dest: "2", desid: desid, fid: fid, rnd: Math.random() },
                    // dataType: 'content', //这里修改为content   
                    success: function (responseText) {
                        // $.ligerDialog.warn(responseText);
                        //location.href = "http://www.baidu.com";
                        //alert(responseText);
                        //$.ligerDialog.warn(responseText);
                        //$.ligerDialog.warn(obj.errorMsg);
                        // $("#maingrid4").append("<lable >错误代码：" + obj.errorMsg + "</lable>");
                        try
                        {
                            var obj = JSON.parse(responseText);
                            if (obj.errorCode == 0)
                            {
                               // alert(obj.errorMsg);
                                $('#iframe').attr("src", obj.errorMsg);
                               // location.href = obj.errorMsg;
                            }
                            else
                                $("#maingrid4").append("<lable >服务器错误：" + obj.errorMsg + "</lable>");
                        } catch (e)
                        {
                            $("#maingrid4").append("<lable >服务器错误：" + responseText +";客户端错误："+ e.message+"</lable>");
                       
                        }
                    }
                });
                return;
 
           
            });

      
    </script>
    
</head>
<body style="padding: 0px;overflow:hidden;">

    <form id="form1" onsubmit="return false">
      <?php echo $fid?>
 
  <div id="maingrid4" style="margin: -1px;"></div>
     
          
        <div id="content"class="box"  >      

        <div  >
         
            <ol class="action-log">
                <input  type="hidden" id="name" />
            </ol>
        </div>

        <iframe id="iframe" name="iframe"  class="box">
            <h2> </h2>
        </iframe>
    </div>
      
    </form>
     

</body>
</html>
