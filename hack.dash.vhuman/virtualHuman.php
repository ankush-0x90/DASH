
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>CoffeeScript WebGL ARP Signing Avatar: loc.2018</title>

<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Access-Control-Allow-Methods" content="GET">

<link rel="stylesheet"
    href="cwa/cwasa.css" />
<script type="text/javascript"
    src="cwa/allcsa.js"></script>

<script src="cwa/jquery.min.js"></script>
    <link rel="stylesheet" href="cwa/virtualHuman.css">
    
</head>

<body onload="CWASA.init();">

<!--================================================================-->
<div class="CWASAPanel av0" align="center" >
</div>
<!--================================================================-->
<button onclick='pushSigML()'>PLay</button>
<script>
    $(document).ready(function() {
        var ele = $("div.CWASAPanel table tr td:last-child");
    });


function pushSigML() {

    var playSigML = document.getElementById('playSigML');
    var sigmaXML = `\<\?xml version="1.0" encoding="utf-8"?>
                    <sigml>
                <hns_sign gloss="A">
                <hamnosys_nonmanual>
                <hnm_mouthpicture picture="V"/>
                </hamnosys_nonmanual>
                <hamnosys_manual>
                <hamparbegin/>
                <hamfinger2/>
                <hamthumbacrossmod/>
                <hamplus/>
                <hamflathand/>
                <hamthumboutmod/>
                <hamparend/>
                <hamparbegin/>
                <hamextfingerul/>
                <hampalmdl/>
                <hamplus/>
                <hamextfingeror/>
                <hampalmd/>
                <hambetween/>
                <hampalmdr/>
                <hamparend/>
                <hamparbegin/>
                <hamthumb/>
                <hamfingerpad/>
                <hamplus/>
                <hamindexfinger/>
                <hamfingertip/>
                <hamparend/>
                <hamtouch/>
                <hamchest/>
                <hamclose/>
                </hamnosys_manual>
                </hns_sign>
                <hns_sign gloss="N">
                <hamnosys_nonmanual>
                <hnm_mouthpicture picture="en"/>
                </hamnosys_nonmanual>
                <hamnosys_manual>
                <hamfinger23/>
                <hamthumbacrossmod/>
                <hamextfingerol/>
                <hampalmd/>
                <hamchest/>
                <hamlrat/>
                <hamclose/>
                </hamnosys_manual>
                </hns_sign>
                <hns_sign gloss="K">
                <hamnosys_nonmanual>
                <hnm_mouthpicture picture="ke_I"/>
                </hamnosys_nonmanual>
                <hamnosys_manual>
                <hamparbegin/>
                <hamfinger2/>
                <hamthumbacrossmod/>
                <hamfingerhookmod/>
                <hamplus/>
                <hamfinger2/>
                <hamthumbacrossmod/>
                <hamparend/>
                <hamparbegin/>
                <hamextfingerl/>
                <hampalmu/>
                <hamplus/>
                <hamextfingeru/>
                <hampalmr/>
                <hamparend/>
                <hamparbegin/>
                <hamfingerside/>
                <hamindexfinger/>
                <hamplus/>
                <hamfingermidjoint/>
                <hamindexfinger/>
                <hamparend/>
                <hamtouch/>
                </hamnosys_manual>
                </hns_sign>
                <hns_sign gloss="U">
                <hamnosys_nonmanual>
                <hnm_mouthpicture picture="ju"/>
                </hamnosys_nonmanual>
                <hamnosys_manual>
                <hamfinger2/>
                <hamthumbacrossmod/>
                <hamextfingerl/>
                <hampalmd/>
                <hamstomach/>
                <hamlrat/>
                <hamclose/>
                </hamnosys_manual>
                </hns_sign>
                <hns_sign gloss="S">
                <hamnosys_nonmanual>
                <hnm_mouthpicture picture="es"/>
                </hamnosys_nonmanual>
                <hamnosys_manual>
                <hamfinger2/>
                <hamthumbacrossmod/>
                <hampinky/>
                <hamextfingerol/>
                <hampalmd/>
                <hamstomach/>
                <hamlrat/>
                <hamclose/>
                </hamnosys_manual>
                </hns_sign>
                <hns_sign gloss="H">
                <hamnosys_nonmanual>
                <hnm_mouthpicture picture="e_It_S"/>
                </hamnosys_nonmanual>
                <hamnosys_manual>
                <hamflathand/>
                <hamthumboutmod/>
                <hamparbegin/>
                <hamextfingero/>
                <hampalmd/>
                <hamplus/>
                <hamextfingeror/>
                <hampalmu/>
                <hamparend/>
                <hamparbegin/>
                <hamhandback/>
                <hamplus/>
                <hampalm/>
                <hamparend/>
                <hamtouch/>
                <hamstomach/>
                <hamclose/>
                <hammoveor/>
                </hamnosys_manual>
                </hns_sign>
                </sigml>`;

        var sigMLBlock = document.getElementById('sigMLBlock');
        sigMLBlock.innerHTML = sigmaXML;
        playSigML.click();
}




</script>
</body>
</html>
