Feature: Create a new user
  In order to have users on the platform
  As a user with admin permissions
  I want to create a new user

  Scenario: A valid non existing user
    Given I send a PUT request to "/users/1aab45ba-3c7a-4344-8936-78466eca77fa" with body:
    """
    {
      "name": "Pedro",
      "lastname": "Garfias",
      "birthday": "1999-12-10"
    }
    """
    Then the response status code should be 201
    And the response should be empty
