<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'theseer\\phpdox\\application' => '/Application.php',
                'theseer\\phpdox\\applicationexception' => '/Application.php',
                'theseer\\phpdox\\backendbootstrapapi' => '/bootstrap/BackendBootstrapApi.php',
                'theseer\\phpdox\\bootstrap' => '/bootstrap/Bootstrap.php',
                'theseer\\phpdox\\bootstrapapi' => '/bootstrap/BootstrapApi.php',
                'theseer\\phpdox\\bootstrapexception' => '/bootstrap/Bootstrap.php',
                'theseer\\phpdox\\buildconfig' => '/config/BuildConfig.php',
                'theseer\\phpdox\\cli' => '/CLI.php',
                'theseer\\phpdox\\clioptions' => '/CLIOptions.php',
                'theseer\\phpdox\\clioptionsexception' => '/CLIOptions.php',
                'theseer\\phpdox\\collector\\backend\\backendinterface' => '/collector/backend/BackendInterface.php',
                'theseer\\phpdox\\collector\\backend\\factory' => '/collector/backend/Factory.php',
                'theseer\\phpdox\\collector\\backend\\factoryexception' => '/collector/backend/Factory.php',
                'theseer\\phpdox\\collector\\backend\\originalvaluelexer' => '/collector/backend/parser/OriginalValueLexer.php',
                'theseer\\phpdox\\collector\\backend\\parseerrorexception' => '/collector/backend/ParseErrorException.php',
                'theseer\\phpdox\\collector\\backend\\parseresult' => '/collector/backend/ParseResult.php',
                'theseer\\phpdox\\collector\\backend\\phpparser' => '/collector/backend/parser/PHPParser.php',
                'theseer\\phpdox\\collector\\backend\\unitcollectingvisitor' => '/collector/backend/parser/UnitCollectingVisitor.php',
                'theseer\\phpdox\\collector\\collector' => '/collector/Collector.php',
                'theseer\\phpdox\\collector\\collectorexception' => '/collector/CollectorException.php',
                'theseer\\phpdox\\collector\\inheritanceresolver' => '/collector/InheritanceResolver.php',
                'theseer\\phpdox\\collectorconfig' => '/config/CollectorConfig.php',
                'theseer\\phpdox\\collectorinterface' => '/collector/CollectorInterface.php',
                'theseer\\phpdox\\configexception' => '/config/GlobalConfig.php',
                'theseer\\phpdox\\configloader' => '/config/ConfigLoader.php',
                'theseer\\phpdox\\configloaderexception' => '/config/ConfigLoader.php',
                'theseer\\phpdox\\docblock\\descriptionparser' => '/docblock/parser/DescriptionParser.php',
                'theseer\\phpdox\\docblock\\docblock' => '/docblock/DocBlock.php',
                'theseer\\phpdox\\docblock\\docblockexception' => '/docblock/DocBlock.php',
                'theseer\\phpdox\\docblock\\factory' => '/docblock/Factory.php',
                'theseer\\phpdox\\docblock\\factoryexception' => '/docblock/Factory.php',
                'theseer\\phpdox\\docblock\\genericelement' => '/docblock/GenericElement.php',
                'theseer\\phpdox\\docblock\\genericelementexception' => '/docblock/GenericElement.php',
                'theseer\\phpdox\\docblock\\genericparser' => '/docblock/parser/GenericParser.php',
                'theseer\\phpdox\\docblock\\inlineprocessor' => '/docblock/InlineProcessor.php',
                'theseer\\phpdox\\docblock\\internalparser' => '/docblock/parser/InternalParser.php',
                'theseer\\phpdox\\docblock\\invalidelement' => '/docblock/InvalidElement.php',
                'theseer\\phpdox\\docblock\\invalidparser' => '/docblock/parser/InvalidParser.php',
                'theseer\\phpdox\\docblock\\licenseparser' => '/docblock/parser/LicenseParser.php',
                'theseer\\phpdox\\docblock\\paramparser' => '/docblock/parser/ParamParser.php',
                'theseer\\phpdox\\docblock\\parser' => '/docblock/Parser.php',
                'theseer\\phpdox\\docblock\\varelement' => '/docblock/VarElement.php',
                'theseer\\phpdox\\docblock\\varparser' => '/docblock/parser/VarParser.php',
                'theseer\\phpdox\\enginebootstrapapi' => '/bootstrap/EngineBootstrapApi.php',
                'theseer\\phpdox\\errorhandler' => '/shared/ErrorHandler.php',
                'theseer\\phpdox\\factory' => '/shared/Factory.php',
                'theseer\\phpdox\\factoryexception' => '/shared/Factory.php',
                'theseer\\phpdox\\factoryinterface' => '/shared/FactoryInterface.php',
                'theseer\\phpdox\\generator\\engine\\abstractengine' => '/generator/engine/AbstractEngine.php',
                'theseer\\phpdox\\generator\\engine\\engineinterface' => '/generator/engine/EngineInterface.php',
                'theseer\\phpdox\\generator\\engine\\factory' => '/generator/engine/Factory.php',
                'theseer\\phpdox\\generator\\engine\\factoryexception' => '/generator/engine/Factory.php',
                'theseer\\phpdox\\generator\\engine\\graph' => '/generator/engine/graph/Graph.php',
                'theseer\\phpdox\\generator\\engine\\graphconfig' => '/generator/engine/graph/GraphConfig.php',
                'theseer\\phpdox\\generator\\engine\\html' => '/generator/engine/html/Html.php',
                'theseer\\phpdox\\generator\\engine\\html\\functions' => '/generator/engine/html/functions.php',
                'theseer\\phpdox\\generator\\engine\\htmlconfig' => '/generator/engine/html/HtmlConfig.php',
                'theseer\\phpdox\\generator\\engine\\indexer' => '/generator/engine/indexer/Indexer.php',
                'theseer\\phpdox\\generator\\engine\\todo' => '/generator/engine/todo/Todo.php',
                'theseer\\phpdox\\generator\\event' => '/generator/Event.php',
                'theseer\\phpdox\\generator\\eventexception' => '/generator/Event.php',
                'theseer\\phpdox\\generator\\eventfactory' => '/generator/EventFactory.php',
                'theseer\\phpdox\\generator\\eventfactoryexception' => '/generator/EventFactory.php',
                'theseer\\phpdox\\generator\\generator' => '/generator/Generator.php',
                'theseer\\phpdox\\generator\\generatorexception' => '/generator/Generator.php',
                'theseer\\phpdox\\generator\\service' => '/generator/Service.php',
                'theseer\\phpdox\\generatorconfig' => '/config/GeneratorConfig.php',
                'theseer\\phpdox\\generatorconfigexception' => '/config/GeneratorConfig.php',
                'theseer\\phpdox\\globalconfig' => '/config/GlobalConfig.php',
                'theseer\\phpdox\\hasfileinfoexception' => '/shared/HasFileInfoException.php',
                'theseer\\phpdox\\inheritanceconfig' => '/config/InheritanceConfig.php',
                'theseer\\phpdox\\parserbootstrapapi' => '/bootstrap/ParserBootstrapApi.php',
                'theseer\\phpdox\\progresslogger' => '/logger/ProgressLogger.php',
                'theseer\\phpdox\\progressloggerexception' => '/logger/ProgressLogger.php',
                'theseer\\phpdox\\project\\abstractunitobject' => '/project/AbstractUnitObject.php',
                'theseer\\phpdox\\project\\abstractvariableobject' => '/project/AbstractVariableObject.php',
                'theseer\\phpdox\\project\\classobject' => '/project/ClassObject.php',
                'theseer\\phpdox\\project\\constantobject' => '/project/ConstantObject.php',
                'theseer\\phpdox\\project\\dependency' => '/project/Dependency.php',
                'theseer\\phpdox\\project\\domcollectioninterface' => '/project/DOMCollectionInterface.php',
                'theseer\\phpdox\\project\\indexcollection' => '/project/IndexCollection.php',
                'theseer\\phpdox\\project\\indexcollectionexception' => '/project/IndexCollection.php',
                'theseer\\phpdox\\project\\interfaceobject' => '/project/InterfaceObject.php',
                'theseer\\phpdox\\project\\memberobject' => '/project/MemberObject.php',
                'theseer\\phpdox\\project\\methodobject' => '/project/MethodObject.php',
                'theseer\\phpdox\\project\\methodobjectexception' => '/project/MethodObject.php',
                'theseer\\phpdox\\project\\parameterobject' => '/project/ParameterObject.php',
                'theseer\\phpdox\\project\\project' => '/project/Project.php',
                'theseer\\phpdox\\project\\projectexception' => '/project/Project.php',
                'theseer\\phpdox\\project\\sourcecollection' => '/project/SourceCollection.php',
                'theseer\\phpdox\\project\\traitobject' => '/project/TraitObject.php',
                'theseer\\phpdox\\project\\unitobjectexception' => '/project/AbstractUnitObject.php',
                'theseer\\phpdox\\projectconfig' => '/config/ProjectConfig.php',
                'theseer\\phpdox\\shellprogresslogger' => '/logger/ShellProgressLogger.php',
                'theseer\\phpdox\\version' => '/shared/Version.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd