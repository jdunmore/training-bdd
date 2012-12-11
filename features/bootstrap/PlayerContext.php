<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkAwareInterface,
    Behat\Mink\Mink;


class PlayerContext extends BehatContext implements MinkAwareInterface
{
    const URL = "http://tictactoe.dev";
    private $mink;
    private $minkParameters;

    public function setMink(Mink $mink)
    {
        $this->mink = $mink;
    }

    public function setMinkParameters(array $parameters)
    {
        $this->minkParameters = $parameters;
    }

    /**
     * @Given /^I am on the "([^"]*)"$/
     */
    public function iAmOnThe($page)
    {
        $pages = array(
            'home page' => ''
        );
        $this->mink->getSession()->visit(self::URL . "/$pages[$page]");
    }

    /**
     * @Given /^I am "([^"]*)"$/
     */
    public function iAm($page)
    {
        throw new PendingException();
    }

    /**
     * @When /^I click on "([^"]*)"$/
     */
    public function iClickOn($button)
    {
        $buttons = array(
            'start a game' => 'start'
        );
        $homePage = $this->mink->getSession()->getPage();        
        $startButton = $homePage->find('css', '#start');
        $startButton->click();
    }

    /**
     * @Given /^I Want to start a game$/
     */
    public function iWantToStartAGame()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should get a new grid$/
     */
    public function iShouldGetANewGrid()
    {
        $this->mink->assertSession()->elementExists('css', '#grid');
    }

    /**
     * @Given /^I want to start a game$/
     */
    public function iWantToStartAGame2()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should wait for "([^"]*)" to start a game$/
     */
    public function iShouldWaitForToStartAGame($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I am a "([^"]*)"$/
     */
    public function iAmA($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^"([^"]*)" is not assigned$/
     */
    public function isNotAssigned($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^assign player to "([^"]*)"$/
     */
    public function assignPlayerTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^"([^"]*)" is assigned$/
     */
    public function isAssigned($arg1)
    {
        throw new PendingException();
    }



    /**
     * @When /^The game results in a draw$/
     */
    public function theGameResultsInADraw()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should see a message saying "([^"]*)"$/
     */
    public function iShouldSeeAMessageSaying($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When /^I win the game$/
     */
    public function iWinTheGame()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should not see a message saying "([^"]*)"$/
     */
    public function iShouldNotSeeAMessageSaying($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When /^I lose the game$/
     */
    public function iLoseTheGame()
    {
        throw new PendingException();
    }

    /**
     * @When /^The game starts$/
     */
    public function theGameStarts()
    {
        throw new PendingException();
    }

    /**
     * @When /^My opponent makes a move$/
     */
    public function myOpponentMakesAMove()
    {
        throw new PendingException();
    }

    /**
     * @When /^I complete my move$/
     */
    public function iCompleteMyMove()
    {
        throw new PendingException();
    }

    /**
     * @When /^A game ends$/
     */
    public function aGameEnds()
    {
        throw new PendingException();
    }

    /**
     * @Given /^it is the current Player\'s turn$/
     */
    public function itIsTheCurrentPlayerSTurn()
    {
        throw new PendingException();
    }

    /**
     * @When /^the current Player makes a move$/
     */
    public function theCurrentPlayerMakesAMove()
    {
        throw new PendingException();
    }

    /**
     * @Given /^the destination is already taken$/
     */
    public function theDestinationIsAlreadyTaken()
    {
        throw new PendingException();
    }

    /**
     * @Then /^the current Player is told the move is invalid\.$/
     */
    public function theCurrentPlayerIsToldTheMoveIsInvalid()
    {
        throw new PendingException();
    }

    /**
     * @Given /^it is not the current Player\'s turn$/
     */
    public function itIsNotTheCurrentPlayerSTurn()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I am a Player$/
     */
    public function iAmAPlayer()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I Want to make a move$/
     */
    public function iWantToMakeAMove()
    {
        throw new PendingException();
    }

    /**
     * @Given /^the target box on the grid is free$/
     */
    public function theTargetBoxOnTheGridIsFree()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I can make a move$/
     */
    public function iCanMakeAMove()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I want to make a move$/
     */
    public function iWantToMakeAMove2()
    {
        throw new PendingException();
    }

    /**
     * @Given /^the target box on the grid is not free$/
     */
    public function theTargetBoxOnTheGridIsNotFree()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I can\'t make a move$/
     */
    public function iCanTMakeAMove()
    {
        throw new PendingException();
    }
}
