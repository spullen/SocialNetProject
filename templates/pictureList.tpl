{foreach from=$pictures item=picture}
    <div>
        <a href="javascript: void(0);" onclick="setPictureToCurrent({$picture->id}); return false;">
        <img class="{if $picture->isCurrent}currentPicture{else}picture{/if}" src="images/profilePhotos/{$picture->filename}" />
        </a>
    </div>
{/foreach}