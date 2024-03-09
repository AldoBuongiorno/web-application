<?php
function applyBackroundVideo()
{
    $i = generateRandomNumber(6);
    
    if ($i == 0) { ?>
        <div class="video">
            <video id="BackgroundVideo" src="../Images/imgHome/video1.mp4" autoplay muted loop> </video>
        </div>
        <?php
    } else if ($i == 1) { ?>
        <div class="video">
            <video id="BackgroundVideo" src="../Images/imgHome/video2.mp4" autoplay muted loop> </video>
        </div>
        <?php
    } else if ($i == 2) { ?>
        <div class="video">
            <video id="BackgroundVideo" src="../Images/imgHome/video3.mp4" autoplay muted loop> </video>
        </div>
        <?php
    } else if ($i == 3) { ?>
        <div class="video">
            <video id="BackgroundVideo" src="../Images/imgHome/video4.mp4" autoplay muted loop> </video>
        </div>
        <?php
    } else if ($i == 4) { ?>
        <div class="video">
            <video id="BackgroundVideo" src="../Images/imgHome/video5.mp4" autoplay muted loop> </video>
        </div>
        <?php
    } else if ($i == 5) { ?>
        <div class="video">
            <video id="BackgroundVideo" src="../Images/imgHome/video6.mp4" autoplay muted loop> </video>
        </div>
        <?php
    }
    if ($i == 6) { ?>
        <div class="video">
            <video id="BackgroundVideo" src="../Images/imgHome/video7.mp4" autoplay muted loop> </video>
        </div>
        <?php
    }

}

function generateRandomNumber($max)
{
    return rand(0, $max);
}

?>