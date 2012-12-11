Feature: Player starts a game
  As a player
  In order to play
  I need to start a game

  Scenario: Player X wants to start a game
	Given I am "Player X"
    And I Want to start a game
    Then I should get a new grid

  Scenario: Player Y wants to start a game
    Given I am "Player Y"
    And I want to start a game
    Then I should wait for "Player X" to start a game
