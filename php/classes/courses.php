<?php
/**
 * Typical Course style for Lynda.com
 *
 * This Course style is an abbreviated example of data collected and stored about courses for Lynda.com
 * This can be extended to include more information such as shares and transcripts and notes
 *
 * @author Corrie Hooker <creativecorrie@gmail.com
 **/

class Courses {

	/**
	 * id for this course; this is the primary key.
	 **/
	private $coursesId;

	/**
	 *id for the User who owns this Profile; this is the foreign key.
	 **/
	private $profileId;

	/**
	 *id for the course table of contents.
	 **/
	private $content;

	/**
	 *id for when the course was created.
	 **/
	private $courseDate;

	/**
	 *id for the course transcript.
	 **/
	private $courseTranscript;

	/**
	 *id for the course video.
	 **/
	private $courseVideo;
}
