<?php

namespace RoleInterfaces\Service;

interface GroupManagementInterface {

	/**
	 *
	 * @return array
	 */
	public function getUserList();

	/**
	 *
	 * @param string $username        	
	 * @param string $password        	
	 */
	public function addUser($username, $password);

	/**
	 *
	 * @param string $username        	
	 * @param string $password        	
	 */
	public function updateUser($username, $password);

	/**
	 *
	 * @param string $username        	
	 */
	public function deleteUser($username);

	/**
	 *
	 * @param string $username        	
	 * @return boolean
	 */
	public function userExists($username);

}