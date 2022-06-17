package com.java.test_task.restservice;

class UserNotFoundException extends RuntimeException {

	UserNotFoundException(Long id) {
		super("Could not find user " + id);
	}
}
