Feature: Player makes a move
  As a player
  In order play the game
  I need to make a move

  Scenario: Player wants to make a valid move
    Given I am a Player
    And I Want to make a move
    And the target box on the grid is free
    Then I can make a move
    
  Scenario: Player wants to make a move where the box is not free
    Given I am a Player
    And I want to make a move
    And the target box on the grid is not free
    Then I can't make a move
