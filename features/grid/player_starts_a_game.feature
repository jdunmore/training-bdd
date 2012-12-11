Feature: Player starts a game
  As a player
  In order to play
  I need to start a game

  Scenario: "Player X" wants to start a game
    Given I am on the "home page"
	  When I click on "start a game"
    Then I should get a new grid

  Scenario: "Player 0" wants to start a game
    Given I am "Player 0"
    And I want to start a game
    Then I should wait for "Player X" to start a game
  
  Scenario: "New Player" wants to play a game
    Given I am a "New Player"
    And "Player X" is not assigned
    Then assign player to "Player X"

  Scenario: "New Player" wants to play a game and there is already one player
    Given I am a "New Player"
    And "Player X" is assigned
    Then assign player to "Player 0"
