<?php

namespace Mr\GraphBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Mr\StartBundle\Entity\MrGraphBuilder;
use Mr\StartBundle\Entity\MrGraphExplorer;

class BuilderCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('mr:graph')
            ->setDescription('Build and update the graph')
            ->addArgument('task', InputArgument::OPTIONAL, 'task to execute')
            //->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters')
        ;
    }

    /**
    * build a road in graph from a node to another
    *
    */
    protected function buildRoad($node_from, $node_to)
    {
      $em = $this->getDoctrine()->getEntityManager();
      
      //exists ?
      $road = $em->getRepository('MrGraphBundle:MrGraph')->findOneBy(array('from_type' => $node_from->getType(), 
                                                                           'from_id'   => $node_from->getId(),
                                                                           'to_type'   => $node_to->getType(), 
                                                                           'to_id'     => $node_to->getId());
  
      //create
      if (!$road) {
        $road = new MrGraph();
        $road->setFromType($node_from->getType());
        $road->setFromId($node_from->getId());
        $road->setToType($node_to->getType());
        $road->setToId($node_to->getId());
        $em->persist($road);
      }
  
      //$road->setName('New product name!');
      $em->flush();
    }

    /**
    * build the graph for a node
    *
    */
    protected function buildRoads($node_from)
    {
      //select next
        foreach (MrGraphBuilder::search($node_from, 'next') as $node_to) {
        //foreach : insert/update in mr_graph and attach statistcs : last_time, nb_people, shorter road
          $this->buildRoad($node_from, $node_to);
        }
    }

    /**
    * get all node to construct roads
    *
    *
    */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getDoctrine()->getEntityManager();

      //MrDiploma
      $diplomas = $em->getRepository('MrStartBundle:MrDiploma')->findAll(); 
      foreach ($diplomas as $diploma) {
        $this->buildRoads($diploma);
      }
      //MrJob
      $jobs = $em->getRepository('MrStartBundle:MrJob')->findAll(); 
      foreach ($jobs as $job) {
        $this->buildRoads($job);
      }
    }
        
        
        
        
        
        /*$name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
        
        // -- color text
        // green text
        $output->writeln('<info>foo</info>');
        // yellow text
        $output->writeln('<comment>foo</comment>');
        // black text on a cyan background
        $output->writeln('<question>foo</question>');
        // white text on a red background
        $output->writeln('<error>foo</error>');
    
        //dialog
        $dialog = $this->getHelperSet()->get('dialog');
        if (!$dialog->askConfirmation($output, '<question>Continue with this action?</question>', false)) {
            return;
        }
        $dialog = $this->getHelperSet()->get('dialog');
        $name = $dialog->ask($output, 'Please enter the name of the widget', 'foo');
            
    
        // -- Testing Commands
        public function testExecute()
        {
            // mock the Kernel or create one depending on your needs
            $application = new Application($kernel);
    
            $command = $application->find('demo:greet');
            $commandTester = new CommandTester($command);
            $commandTester->execute(array('command' => $command->getFullName()));
    
            $this->assertRegExp('/.../', $commandTester->getDisplay());
    
            // ...
        }
        // -- Getting Services from the Service Container¶
        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $name = $input->getArgument('name');
            $translator = $this->getContainer()->get('translator');
            if ($name) {
                $output->writeln($translator->trans('Hello %name%!', array('%name%' => $name)));
            } else {
                $output->writeln($translator->trans('Hello!'));
            }
        }
        // -- Calling an existing Command
        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $command = $this->getApplication()->find('demo:greet');
        
            $arguments = array(
                'command' => 'demo:greet',
                'name'    => 'Fabien',
                '--yell'  => true,
            );
        
            $input = new ArrayInput($arguments);
            $returnCode = $command->run($input, $output);
        
            // ...
        }
        */
}