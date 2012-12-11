Feature: Player is told move is invalid
  As a Player
  I want to be told when my move is invalid
  So that I can make a valid move.

  Scenario: Player's destination is already taken
    Given it is the current Player's turn
    When the current Player makes a move
    And the destination is already taken
    Then the current Player is told the move is invalid.

  Scenario: It is not the current Player's turn to move
    Given it is not the current Player's turn
    When the current Player makes a move
    Then the current Player is told the move is invalid.
