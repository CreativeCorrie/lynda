<?php
/**
 * Typical Course style for Lynda.com
 *
 * This Course style is an abbreviated example of data collected and stored about courses for Lynda.com
 * This can be extended to include more information such as shares and transcripts and notes
 *
 * @author Corrie Hooker <creativecorrie@gmail.com> <TheHackeyHooker.com>
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
	/**
	 * accessor method for courses id
	 *
	 * @return int value of courses id
	 **/
	public function getCoursesId() {
		return ($this->coursesId);
	}
	/**
	 * murator method for courses id
	 *
	 * @param int $newCoursesId new value of courses id
	 * @throws UnexpectedValueException if $newCourseId is not an integer
	 **/
	public function setCoursesId($newCoursesId) {
		//verify the profile id is valid
		$newCoursesId = filter_var($newCoursesId, FILTER_VALIDATE_INT);
		if($newCoursesId === false) {
			throw(new UnexpectedValueException("course id is not a valid integer:"));
		}
		//convert and store the courses id
		$this->coursesId = intval($newCoursesId);
	}

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return ($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new mavle of profile id
	 * @throws UnexpectedValueException if $newProfileId is not an integer.
	 **/
}
