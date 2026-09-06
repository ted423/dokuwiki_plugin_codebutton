<?php
/**
 * Action Plugin: Inserts buttons into the toolbar for code and file tags
 *
 * @author     Heiko Barth
 * @author     Updated for PHP 8 / modern DokuWiki
 */

if (!defined('DOKU_INC')) {
    die();
}

class action_plugin_codebutton extends DokuWiki_Action_Plugin
{
    /**
     * Register the event handlers
     *
     * @param Doku_Event_Handler $controller
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button');
    }

    /**
     * Inserts the toolbar buttons for <code> and <file>
     *
     * @param Doku_Event $event
     * @param mixed      $param
     */
    public function insert_button(Doku_Event $event, $param)
    {
        // Code button
        $event->data[] = [
            'type'  => 'format',
            'title' => $this->getLang('insertcode'),
            'icon'  => DOKU_REL . 'lib/plugins/codebutton/image/code.png',
            'open'  => "<code>\n",
            'close' => "\n</code>",
        ];

        // File button
        $event->data[] = [
            'type'  => 'format',
            'title' => $this->getLang('insertfile'),
            'icon'  => DOKU_REL . 'lib/plugins/codebutton/image/file-solid-full.svg',
            'open'  => "<file>\n",
            'close' => "\n</file>",
        ];
    }
}
