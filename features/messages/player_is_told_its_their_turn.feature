Feature: Player is told it's their turn
  As a player
  I want to be told it's my turn
  So that I know when I can make a move
  
  Scenario: It is the start of the game
    Given I am on the "game page"
    And I am "player1"
    When The game starts
    Then I should see a message saying "It is your turn"

  Scenario: It is my turn to make a move
    Given I am on the "game page"
    When My opponent makes a move
    Then I should see a message saying "It is your turn"

  Scenario: When I finish playing a move
    Given I am on the "game page"
    When I complete my move
    Then I should not see a message saying "It is your turn"

  Scenario: When the game ends
    Given I am on the "game page"
    When A game ends
    Then I should not see a message saying "It is your turn"
