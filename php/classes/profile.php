<?php

/**
 * Typical Profile for Lynda.com
 *
 * This Profile is an abbreviated example of data collected and stored about a user for Lynda.com
 * * A person must provide this information to be able to utilize the Lynda.com resources
 *
 * @author Corrie Hooker <creativecorrie@gmail.com> <The Hackey Hooker.com>
 **/

class Profile {

	/**
	 * id for user; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;

	/**
	 * email, for communication purposes
	 * @var int $email
	 **/
	private $email;

	/**
	 * name of user
	 * @var int $name
	 **/
	private $name;

	/**
	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws InvalidArgumentException if profile id is not an integer
	 * @throws RangeException if profile id is negative
	 **/
	public function setProfileId($newProfileId) {
		//first, apply the filter to the input
		//base case: if the profile id is null, this a new profile without a mySQL assigned id (yet)
		if($newProfileId === null) {
			$this->profileId = null;
			return;
		}
		$newProfileId=filter_var($newProfileId, FILTER_VALIDATE_EMAIL);
		//if filter_var rejects the new id, throw and Exception
		if($newProfileId === false) {
			throw(new InvalidArgumentException("profile id is not an integer"));
		}
		//if the profile id is out of range, throw an exception
		if($newProfileId <= 0) {
			throw(new RangeException("profile if must be and email address"));
		}
		//finally, if we got here, we know it's a valid id  save it to the object
		$this->profileId = $newProfileId;
	}
}

