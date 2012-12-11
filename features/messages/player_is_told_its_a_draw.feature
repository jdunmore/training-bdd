Feature: Player is told it's a draw
  As a player
  I want to be told it's a draw
  So that I know the result was a draw

  Scenario: It is a draw
    Given I am on the "game page"
    When The game results in a draw
    Then I should see a message saying "It's a draw"

  Scenario: I win
    Given I am on the "game page"
    When I win the game
    Then I should not see a message saying "It's a draw"

  Scenario: I lose
    Given I am on the "game page"
    When I lose the game
    Then I should not see a message saying "It's a draw"
