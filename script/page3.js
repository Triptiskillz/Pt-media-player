var sn="";
$(document).ready(function(){
    $(".icon").click(function(){
        var abc = $(this).attr("addr");
        $("#video").attr("src",abc);
        video.play();
        //var sd=document.getElementsById("song-desc");
        var sn = $(this).attr("name");
        //alert(sn.localeCompare("Bhula Dunga"));
        if(sn.localeCompare("Bhula Dunga")==0){
                
            $("h2").html("Bhula Dunga");
            $("#cast-name").html("Featuring : Siddharth Shukla and Sheznaz Kaur Gill");
            $("#singer-name").html("Singer : Darshan Raval");
            $("#composer-name").html("Composer : Darshan Raval");
            $("#other").html("Powered By : Indie Music Label");
        }
        if(sn.localeCompare("Dil Meri Na Sune")==0){
            $("h2").html("Dil Meri Na Sune");
            $("#cast-name").html("Featuring : Utkarsh Sharma and Ishita Chauhan");
            $("#singer-name").html("Singer : Atif Aslam");
            $("#composer-name").html("Composer : Himesh Reshamiya");
            $("#other").html("Powered By : Tips Music");
        }
        if(sn.localeCompare("Filhall")==0){
            $("h2").html("Filhall");
            $("#cast-name").html("Featuring : Akshay Kumar and Nupur Sanon");
            $("#singer-name").html("Singer : B Praak");
            $("#composer-name").html("Composer : Jaani");
            $("#other").html("Powered By : Desi Melodies");
        }
        if(sn.localeCompare("Gale Lag Jaa")==0){
            $("h2").html("Gale Lag Jaa");
            $("#cast-name").html("Featuring : Akshay Kumar and Katrina Kaif");
            $("#singer-name").html("Singer : Javed Ali & Banjyotsna");
            $("#composer-name").html("Composer : Pritam");
            $("#other").html("Powered By : Venus");
        }
        if(sn.localeCompare("Genda Phool")==0){
            $("h2").html("Genda Phool");
            $("#cast-name").html("Featuring : Badshah and Jacqueline Fernandez");
            $("#singer-name").html("Singer : Badshah and Payal Dev");
            $("#composer-name").html("Composer : Badshah");
            $("#other").html("Powered By : Sony Music India");
        }
        if(sn.localeCompare("Hawa Banke")==0){
            $("h2").html("Hawa Banke");
            $("#cast-name").html("Featuring : Siddharth Shukla and Sheznaz Kaur Gill");
            $("#singer-name").html("Singer : Darshan Rawal and Simran");
            $("#composer-name").html("Composer : Nirmaan");
            $("#other").html("Powered By : Indie Music Label");
        }
        if(sn.localeCompare("Humsafar")==0){
            $("h2").html("Humsafar");
            $("#cast-name").html("Featuring : Varun Dhawan and Alia Bhatt");
            $("#singer-name").html("Singer : Akhil Sachdeva and Mansheel Gujral");
            $("#composer-name").html("Composer : Akhil Sachdeva");
            $("#other").html("Powered By : T-series");
        }
        if(sn.localeCompare("Ik Mulakat")==0){
            $("h2").html("Ek Mulakat");
            $("#cast-name").html("Featuring : Ayushmann Khurana and Nushrat Barucha");
            $("#singer-name").html("Singer : Altamash Faridi and Palak Muchhal");
            $("#composer-name").html("Composer : Meet Bros.");
            $("#other").html("Powered By : Zee Music Company");
        }
        if(sn.localeCompare("Ik Vaari Aa")==0){
            $("h2").html("Ik Vaari Aa");
            $("#cast-name").html("Featuring : Shushant Singh Rajput and Kriti Sanon");
            $("#singer-name").html("Singer : Arijit Singh");
            $("#composer-name").html("Composer : Pritam");
            $("#other").html("Powered By : T-series");
        }
        if(sn.localeCompare("Humnava Mere")==0){
            $("h2").html("Humnava Mere");
            $("#cast-name").html("Featuring : Jubin Nautiyal and Romika Sharma");
            $("#singer-name").html("Singer : Jubin Nautiyal");
            $("#composer-name").html("Composer : Manoj Muntashir");
            $("#other").html("Powered By : T-series");
        }
        if(sn.localeCompare("Aankh Marey")==0){
            $("h2").html("Aankh Marey");
            $("#cast-name").html("Featuring : Ranveer Singh and Sara Ali Khan");
            $("#singer-name").html("Singer : Neha Kakkar, Mika and Kumar Sanu");
            $("#composer-name").html("Composer : Tanishk Bagchi");
            $("#other").html("Powered By : T-series");
        }
        if(sn.localeCompare("Main Rahoon Ya Na Rahoon")==0){
            $("h2").html("Main Rahoon Ya Na Rahoon");
            $("#cast-name").html("Featuring : Emraan Hashmi and Esha Gupta");
            $("#singer-name").html("Singer : Armaan Malik");
            $("#composer-name").html("Composer : Amaal Malik");
            $("#other").html("Powered By : T-series");
        }
        //$("h3").html(sn+" ");
    });
});


//play and pause coding
var play_icon=document.getElementById("play-icon");
play_icon.onclick=function(){
    var vid=document.getElementById("video");
    if(this.className=="fa fa-play"){
        video.play();
        this.className="fa fa-pause";
        this.title="Pause";
    }
    else{
        video.pause();
        this.className="fa fa-play";
        this.title="Play";
    }
}


//progress bar coding
var video=document.getElementById("video");
video.ontimeupdate=function(){
    var pro=document.getElementById("progress");
    var time=100*this.currentTime/this.duration;
    progress.style.width=time+"%";
    if(video.currentTime == 0){
        play_icon.className="fa fa-pause";
    }
    if(video.currentTime == video.duration)
    {
        play_icon.className="fa fa-play";
    }
    //onclick pause
    this.onclick=function(){
        if(play_icon.className=="fa fa-play"){
            video.play();
            play_icon.className="fa fa-pause";
            play_icon.title="Pause";
        }
        else{
            video.pause();
            play_icon.className="fa fa-play";
            play_icon.title="Play";
        }
    }

    //time showing above progress    
    var t=document.getElementById("time");
    var cs=Math.floor(video.currentTime);
    var ts=Math.floor(video.duration);
    if(cs%60<10 && ts%60<10){
        t.innerHTML=Math.floor(cs/60)+":0"+cs%60+"/"+Math.floor(ts/60)+":0"+ts%60;
    }
    if(cs%60<10 && ts%60>9){
        t.innerHTML=Math.floor(cs/60)+":0"+cs%60+"/"+Math.floor(ts/60)+":"+ts%60;
    }
    if(cs%60>9 && ts%60<10){
        t.innerHTML=Math.floor(cs/60)+":"+cs%60+"/"+Math.floor(ts/60)+":0"+ts%60;
    }
    if(cs%60>9 && ts%60>9){
        t.innerHTML=Math.floor(cs/60)+":"+cs%60+"/"+Math.floor(ts/60)+":"+ts%60;
    }



}


//forward and backward progress
var progress_bar=document.getElementById("progress-bar");
progress_bar.onclick=function(event){
    var percent = event.offsetX/this.offsetWidth;
    video.currentTime=percent*video.duration;
}


//hover time or title time
progress_bar.onmouseover=function(event){
    var percent = event.offsetX/this.offsetWidth;
    var ts=percent*video.duration;
    
    var min = Math.floor(ts/60);
    var sec = Math.floor(ts) - min*60;
    if(sec<10){
        sec="0"+sec;
    }
    this.title=min+":"+sec;
    //alert(min+":"+sec);
}


//stop coding and repeat coding
var stop_icon=document.getElementById("stop-icon");
stop_icon.onclick=function(){
    var vid=document.getElementById("video");
    video.currentTime=0;
    video.pause();
    if(video.currentTime==0){
        play_icon.className="fa fa-play";
    }
}
var rep_icon=document.getElementById("repeat-icon");
rep_icon.onclick=function(){
    var vid=document.getElementById("video");
    video.currentTime=0;
    video.play();
    if(video.currentTime==0){
        play_icon.className="fa fa-pause";
    }
}

//volume coding
var speaker= document.getElementById("volume");
speaker.onclick=function(){
    var volume_slider=document.getElementById("volume-slider");
    if(volume_slider.style.display=="none"){
        volume_slider.style.display="block";
        volume_slider.oninput=function(){
            video.volume=this.value;
            speaker.title=this.value*100+"%";
            //alert(video.volume);
            if(this.value>=0.5)
            {
                speaker.className="fa fa-volume-up home ic";
            }
            if(this.value>=0 && this.value<0.5)
            {
                speaker.className="fa fa-volume-down home ic";
            }
            if(this.value==0)
            {
                speaker.className="fa fa-volume-off home ic";
            }
        } 
    }
    else{
        volume_slider.style.display="none";
    }
}




// full-screen coding
var fullscrn=document.getElementById("fullscreen");
fullscrn.onclick=function(){
    video.requestFullscreen();
}