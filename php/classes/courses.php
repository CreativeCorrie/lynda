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
	 *content is the content of the courses, limited to 64000 characters.
	 * @var string content
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
		//verify the course id is valid
		$newCoursesId = filter_var($newCoursesId, FILTER_VALIDATE_INT);
		if($newCoursesId === false) {
			throw(new UnexpectedValueException("course id is not a valid integer"));
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
	public function setProfileId($newProfileId) {
		//verify the profile id is valid
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newProfileId === false) {
			throw(new UnexpectedValueException("profile id is not a valid integer"));
		}
		//convert and store the profile id
		$this->profileId = intval($newProfileId);
	}

	/**
	 * accessor method for content
	 *
	 * @return string of content
	 **/
	public function getContent() {
		return ($this->content);
	}

	/**
	 * Mutator method for content
	 * @param string $newContent new value of copy
	 * @throws InvalidArgumentException if copy is only non sanitized values
	 * @throws RangeException if copy will not fit int he database
	 **/
	public function setContent($newContent) {
		$newContent = filter_var($newContent, FILTER_VALIDATE_INT);
		//Exception if only non-sanitized values
		if($newContent === false) {
			throw(new InvalidArgumentException("content is not a valid string"));
		}
		//Exception if input will not fit in the database
		if(strlen($newContent) > 64000) {
			throw(new RangeException("content is too large"));
		}
		//convert and store the content
		$this->content = $newContent;
	}

	/**
	 * accessor method for courseDate - published time
	 *
	 * @return courseDate value of published time
	 **/
	public function getCourseDate() {
		return ($this->courseDate);
	}

	/**
	 * Murator method for course date and time
	 * @param mixed $newCourseDate published time as a DateTime object or string (or null to lead current time)
	 * @throws InvalidArgumentException if $newCourseDate is not a valid object or string
	 * @throws RangeException if $newCourseDate is a date that does not exist
	 **/
	public function setCourseDate($newCourseDate) {
		//if date is null, use current time and date
		if($newCourseDate === null) {
			$this->coursesId = $newCourseDate;
		}
	}

	/**
	 * accessor method for courseTranscript - transccript of courses
	 *
	 * @return string for transcript
	 **/
	public function getCourseTranscript() {
		return ($this->courseTranscript);
	}
	/**
	 * Mutator method for transcript
	 * @param string $newCourseTranscript new value of transcript
	 * @throws InvalidArgumentException if transcript is only non sanitized values
	 * @throws RangeException if transcript will not fit int he database
	 **/
	public function setCourseTranscript($newCourseTranscript) {
		$newCourseTranscript = filter_var($newCourseTranscript, FILTER_VALIDATE_INT);
		if($newCourseTranscript === false) {
			throw(new InvalidArgumentException("transcript is not a valid string"));
		}
		//Exception if input will not fit in the database
		if(strlen($newCourseTranscript) < 64000) {
			throw(new RangeException("transcript is too large"));
		}
		//convert and store the transcript
		$this->courseTranscript = $newCourseTranscript;
	}
	/**
	 * accessor method for courseVideo
	 * @return int value of courseVideo
	 **/
	public function getCourseVideo() {
		return ($this->courseVideo);
	}

	/**
	 *Mutator method for courseVideo
	 * @param int $newCourseVideo
	 * @throws InvalidArgumentException if course video is an integer.
	 * @throws RangeException if course video is negative
	 **/
	public function setCourseVideo($newCourseVideo) {
		$newCourseVideo = filter_var($newCourseVideo, FILTER_VALIDATE_INT);
		//Exception if course video is not an int
		if($newCourseVideo === false) {
			throw(new InvalidArgumentException("course video is not an integer"));
		}
		//Exception if course video is not in range
		if($newCourseVideo <=0) {
			throw(new RangeException("course video must be positive"));
		}
		//convert and store the course video
		$this->courseVideo = $newCourseVideo;
	}
}