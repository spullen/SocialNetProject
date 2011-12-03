ALTER TABLE `PersonalInfo` ADD INDEX (`userID`);
ALTER TABLE `Friends` ADD INDEX (`userID`);
ALTER TABLE `Friends` ADD INDEX (`friendID`);
ALTER TABLE `Messages` ADD INDEX (`fromUserID`);
ALTER TABLE `Messages` ADD INDEX (`toUserID`);
ALTER TABLE `ProfilePictures` ADD INDEX (`userID`);
ALTER TABLE `Status` ADD INDEX (`userID`);
ALTER TABLE `Status` ADD INDEX (`createdAt`);