function getsigml(){
    var xhr;
    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }else if(window.ActiveXObject){
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
    }else{
        throw new Error("Ajax is not supported by your browser");
    }

    
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4){
            if(xhr.status == 200){
                xmlresponse = xhr.responseText;
                console.log(xmlresponse);
                pushSigMLArg(xmlresponse);
            }
        }
    }
    var text = document.getElementById('ip_text').value;

    if(text=="") {
        document.getElementById('textLoading').innerHTML = "Please Enter Something";
    }
    else {
        console.log("text : "+text);
        xhr.open('POST','../hack.dash.api/');
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        xhr.send("text="+text);

    }
}

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
                </sigml>`;
        var sigMLBlock = document.getElementById('sigMLBlock');
        sigMLBlock.innerHTML = sigmaXML;
        playSigML.click();
}

function pushSigMLArg(xmlresponse) {
    var playSigML = document.getElementById('playSigML');
    var sigmaXML = xmlresponse;
    var sigMLBlock = document.getElementById('sigMLBlock');
    sigMLBlock.innerHTML = sigmaXML;
    playSigML.click();
}



/* recorder functions */

function callRecorder(  ) {
    //alert("helo");
    //method to 
    if (annyang) {
        // Let's define our first command. First the text we expect, and then the function it should call
        var commands = {
            'hello': function() { alert('Hello world!'); }
        };
      
        // Add our commands to annyang
        annyang.addCommands(commands);
      
        // Start listening. You can call this here, or attach this call to an event, button, etc.
        annyang.start();
      }
      
}
