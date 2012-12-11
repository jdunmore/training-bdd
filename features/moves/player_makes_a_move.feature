Feature: Player makes a move
  As a player
  In order play the game
  I need to make a move

  Scenario: Player wants to make a valid move
    Given I am on the "game page"
    When I click on "grid 1 1"
    Then "grid 1 1" is no longer a button
    
  Scenario: Player wants to make a move where the box is not free
    Given I am a Player
    When the target box on the grid is not free
    Then I can't make a move
