<?php

global $userData;

?>


<form id="profile-image" method="post" action="">

    <div class="image-upload">

        <div class="select-image">

            <input title="" type="text" name="image-uploaded" class="pointer">
            <!-- default-image; background-image; display:block -> display:none -->

        </div>

        <span id="user-name" class="profile-position font600"><?= $_SESSION['username']; ?></span>

    </div>


</form>

<div class="count-keys font700">
    <span>CHAVES</span>
    <span id="icon-key" class="center">&nbsp</span>
    <span class="profile-font-size"><?= $_SESSION['keys']; ?></span>
</div>

