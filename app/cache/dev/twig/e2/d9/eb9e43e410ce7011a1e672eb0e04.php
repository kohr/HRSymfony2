<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_e2d9eb9e43e410ce7011a1e672eb0e04 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ((!$this->getContext($context, 'async'))) {
            // line 3
            echo "<script src=\"http://connect.facebook.net/";
            echo twig_escape_filter($this->env, $this->getContext($context, 'culture'), "html");
            echo "/all.js\"></script>
";
        }
        // line 5
        echo "<script>
";
        // line 7
        if ($this->getContext($context, 'async')) {
            // line 8
            echo "window.fbAsyncInit = function() {
";
        }
        // line 10
        echo "  FB.init(";
        echo twig_jsonencode_filter(array("appId" => $this->getContext($context, 'appId'), "xfbml" => $this->getContext($context, 'xfbml'), "session" => $this->getContext($context, 'session'), "status" => $this->getContext($context, 'status'), "cookie" => $this->getContext($context, 'cookie'), "logging" => $this->getContext($context, 'logging')));
        echo ");
";
        // line 11
        if ($this->getContext($context, 'async')) {
            // line 12
            echo "  ";
            echo $this->getContext($context, 'fbAsyncInit');
            echo "
};

(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + ";
            // line 17
            echo twig_jsonencode_filter(sprintf("//connect.facebook.net/%s/all.js", $this->getContext($context, 'culture')));
            echo ";
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());
";
        }
        // line 23
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
