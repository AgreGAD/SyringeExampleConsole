<?php return array (
  'parameters' => 
  array (
  ),
  'services' => 
  array (
    'app' => 
    array (
      'class' => 'Symfony\\Component\\Console\\Application',
      'calls' => 
      array (
        0 => 
        array (
          0 => 'addCommands',
          1 => 
          array (
            0 => '#console_commands',
          ),
        ),
      ),
    ),
    'command.foo' => 
    array (
      'class' => 'Command\\FooCommand',
      'tags' => 'console_commands',
    ),
    'command.bar' => 
    array (
      'class' => 'Command\\BarCommand',
      'tags' => 'console_commands',
    ),
  ),
  'aliases' => 
  array (
  ),
  'tags' => 
  array (
    'console_commands' => 
    array (
      0 => 'command.foo',
      1 => 'command.bar',
    ),
  ),
);