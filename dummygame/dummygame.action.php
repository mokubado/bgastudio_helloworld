<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * DummyGame implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on https://boardgamearena.com.
 * See http://en.doc.boardgamearena.com/Studio for more information.
 * -----
 *
 * dummygame.action.php
 *
 * DummyGame main action entry point
 *
 *
 * In this file, you are describing all the methods that can be called from your
 * user interface logic (javascript).
 *
 * If you define a method "myAction" here, then you can call it from your javascript code with:
 * this.ajaxcall( "/dummygame/dummygame/myAction.html", ...)
 *
 */


  class action_dummygame extends APP_GameAction
  {
    // Constructor: please do not modify
   	public function __default()
  	{
  	    if( self::isArg( 'notifwindow') )
  	    {
            $this->view = "common_notifwindow";
  	        $this->viewArgs['table'] = self::getArg( "table", AT_posint, true );
  	    }
  	    else
  	    {
            $this->view = "dummygame_dummygame";
            self::trace( "Complete reinitialization of board game" );
      }
  	}

    public function callPutCard()
    {
        self::setAjaxMode();

        $numList = explode(',', self::getArg('cards', AT_numberlist, true));
        $cardIDList = [];

        foreach($numList as $pos => $numStr){
            $cardIDList[] = intval($numStr);
        }

        $this->game->putCards($cardIDList);
        self::ajaxResponse();
    }
  }
