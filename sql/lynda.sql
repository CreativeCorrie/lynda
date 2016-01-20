DROP TABLE IF EXISTS viewed;
DROP TABLE IF EXISTS courses;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	email VARCHAR (128) NOT NULL,
	phone VARCHAR (32),
	UNIQUE (email),
	PRIMARY KEY (profileId)
);

CREATE TABLE courses (
	coursesId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileId INT UNSIGNED NOT NULL,
	courseContent VARCHAR (140) NOT NULL,
	courseDate DATETIME NOT NULL,
	INDEX(profileId),
	FOREIGN KEY(profileId) REFERENCES profile(profileId),
	PRIMARY KEY (coursesId)
);

CREATE TABLE viewed (
	profileId INT UNSIGNED NOT NULL,
	coursesId INT UNSIGNED NOT NULL,
	viewedId INT UNSIGNED NOT NULL,
	viewedDate DATETIME NOT NULL,
	shared VARCHAR (140)NOT NULL,
	INDEX(profileId),
	INDEX(coursesId),
	FOREIGN KEY(profileId) REFERENCES  profile(profileId),
	FOREIGN KEY(coursesId) REFERENCES courses(coursesId),
	PRIMARY KEY(profileId, viewedId)
);