<?php

/* principal.twig */
class __TwigTemplate_a5e80d1ce76b75612239e366b8e13c93ee960e5f3e41fdbf1093f262e04df3ef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Page Title</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"main.css\" />
    <script src=\"main.js\"></script>
</head>
<body>
    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "principal.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "principal.twig", "/var/www/easy-entry/src/App/Views/principal.twig");
    }
}
