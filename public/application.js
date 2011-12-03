
function showAboutMeEdit(uid) {
    // hide the about me div
    $('aboutMe').hide();
    // get the form
    return new Ajax.Updater('aboutMeEdit',
                            'aboutMeEdit.php',{
                            parameters: {uid: uid} });
}

function showPersonalInfoEdit(uid) {
    $('personalInfo').hide();
    return new Ajax.Updater('personalInfoEdit',
                            'personalInfoEdit.php',{
                            parameters: {uid: uid} });
}

function updateAboutMe(form) {
    return new Ajax.Updater('aboutMe', 'updateAboutMe.php',
                            {asynchronous:true,
                             evalScripts:true,
                             onSuccess: cancelEdit('aboutMe', 'aboutMeEdit'),
                             parameters:Form.serialize(form)});
}

function updatePersonalInfo(form) {
    return new Ajax.Updater('personalInfo', 'updatePersonalInfo.php',
                            {asynchronous:true,
                             evalScripts:true,
                             onSuccess: cancelEdit('personalInfo', 'personalInfoEdit'),
                             parameters:Form.serialize(form)});
}

/*
 * Cancels an ajax edit form
 * @param showID: show the hidden data that was there before edit
 * @param hideID: hides the form
 */
function cancelEdit(showID, hideID) {
    $(hideID).innerHTML = '';
    $(showID).show();
}


/**
 * updateStatusMessage on profile page
 * @param form
 */
function updateStatusMessage(form) {
    return new Ajax.Updater('statusMessage', 'updateStatus.php',
                            {asynchronous:true,
                             evalScripts:true,
                             parameters:Form.serialize(form)});
}

/**
 * Add new friend
 */
function addFriend(userID, newFriendID) {
    return new Ajax.Updater('message', 'addFriend.php',
                            {asynchronous:true,
                             evalScripts:true,
                             parameters: {uid: userID, nfid: newFriendID}});
}

function removeFriend(userID, friendID) {
    return new Ajax.Updater('message', 'removeFriend.php',
                            {asynchronous: true,
                             evalScripts: true,
                             parameters: {uid: userID, fid: friendID}});
}

function changeFriendLink(linkType, userID, profileID) {
    return new Ajax.Updater('friendLink', 'changeFriendLink.php',
                            {asynchronous: true,
                             evalScripts: true,
                             parameters: {type: linkType, uid: userID, fid: profileID}});
}

function updateFriendList(listNameID, requestPage, userID, pageNumberSelected) {
    var prevPageNumber = $('currentPage').className;
    $(listNameID+'_'+prevPageNumber).className = "";
    $(listNameID+'_'+pageNumberSelected).className = "current";
    $('currentPage').className = pageNumberSelected;
    return new Ajax.Updater(listNameID, requestPage, {
        asynchronous: true,
        evalScripts: true,
        method: 'get',
        onLoading: $('indicator').show(),
        onSuccess: $('indicator').hide(),
        parameters: {uid: userID, page: pageNumberSelected}
    });
}

function setPictureToCurrent(pictureId) {
    return new Ajax.Updater('pictures', 'setCurrentPicture.php',{
        asynchronous: true,
        evalScripts: true,
        method: 'get',
        parameters: {pid: pictureId}
    })
}

/**
 * For a "tab set" you can swap the content
 */
function tabSwap(prefix, info_div_id, num_tabs) {
    var c = 0;
    while(c < num_tabs) {
        if(c == info_div_id) {
            $(prefix + '_' + c).show();
            $(prefix + '_' + c + '_link').className = "selected";
        }
        else {
            $(prefix + '_' + c).hide();
            $(prefix + '_' + c + '_link').className = "";
        }
        c++;
    }
}

/* shows and hides ajax indicator */
Ajax.Responders.register({
    onCreate: function(){
        if ($('ajax-indicator') && Ajax.activeRequestCount > 0) {
            Element.show('ajax-indicator');
        }
    },
    onComplete: function(){
        if ($('ajax-indicator') && Ajax.activeRequestCount == 0) {
            Element.hide('ajax-indicator');
        }
    }
});


