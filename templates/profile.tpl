{include file="header.tpl" title="Profile"}
<div id="profile">
  <div class="profileHeading"><span class="profileName">{$profile->name}</span> <span id="statusMessage">{include file="status.tpl"}</span></div>
  {if $profile->id == $user->id}
  <div class="whatUp">
  <form action="updateStatus.php" onsubmit="updateStatusMessage(this); $('statusInput').value = ''; return false;">
  <div style="display:none; padding: 0; margin: 0;"><input type="hidden" name="uid" value="{$profile->id}" /></div>
  <table><tr><td><input type="text" id="statusInput" name="message" class="statusInput" /></td><td><input type="submit" value="Update Status" /></td></tr></table>
  </form>
  </div>
  {/if}
  <div id="profileSide">
    <div id="profilePhoto">
      <img src="images/profilePhotos/{$profile->profilePicture->filename}" />
      {if $user->id == $profile->id}
      <div><a href="picture.php?uid={$profile->id}"><img src="images/icons/picture_edit.png" border="0" /> Change Profile Photo</a></div>
      {/if}
    </div>
    <div id="friends">
        <div class="sectionHeader">
          <h3>Friends</h3>
          <div id="friendLink">
          {if $canFriend}
            {include file="addFriendLink.tpl" uid=$user->id fid=$profile->id}
          {else}
            {if $user->id != $profile->id}
                {include file="removeFriendLink.tpl" uid=$user->id fid=$profile->id}
            {/if}
          {/if}
          </div>
        </div>
        <div class="spacer"></div>
        {include file="friendList.tpl"}
        <div class="spacer"></div>
        <div>
        <a href="browseFriends.php?uid={$profile->id}&init=1" rel="height=500" class="lbOn" onclick="return false;"><img src="images/icons/group_link.png" border="0" /> Browse Friends</a>
        </div>
        {if $user->id == $profile->id}
        <div class="spacer"></div>
        <div>
        <a href="recommendations.php" rel="height=450" class="lbOn" onclick="return false;"><img src="images/icons/group_go.png" border="0" /> Friend Recommendations</a>
        </div>
        {/if}
    </div>
  </div>
  <div id="profileInformation">
    <div id="profileNav">
        <ul>
            <li id="info_0_link" class="selected"><a href="javascript: void(0);" onclick="tabSwap('info', 0, 2);">Info</a></li>
            <li id="info_1_link"><a href="javascript: void(0);" onclick="tabSwap('info', 1, 2);">Wall</a></li>
        </ul>
    </div>
    <div id="profileTabContent">
        <div id="info_0">
            <div class="section">
                <div class="sectionHeader">
                    <h3>About Me</h3>
                </div>
                <div id="aboutMe">
                    {include file="aboutMe.tpl"}
                </div>
                <div id="aboutMeEdit"></div>
            </div>
            <div class="section">
                <div class="sectionHeader">
                    <h3>Personal Information</h3>
                </div>
                <div id="personalInfo">
                    {include file="personalInfo.tpl"}
                </div>
                <div id="personalInfoEdit"></div>
            </div>
        </div>
        <div id="info_1" style="display: none;">
            Wall posts will go here (placeholder for now)
        </div>
    </div>
  </div>
  <div class="clear"></div>
</div>
{include file="footer.tpl"}