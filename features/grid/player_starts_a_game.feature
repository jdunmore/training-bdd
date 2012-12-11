Feature: Player starts a game
  As a player
  In order to play
  I need to start a game

  Scenario: "Player X" wants to start a game
    Given I am on the "home page"
	When I click on "start a game"
    Then I should get a new grid
    
  Scenario: All the buttons are on the grid when we start a game
    Given I am on the "game page"
    Then All of the grid are buttons 
