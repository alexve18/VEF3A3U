<?php
/*
*	MVC (Model-View-Controller) in PHP tutorial (Hello world in MVC)
*	https://r.je/mvc-in-php.html
*   
*   User interaction viðbót 
*   when "Hello world" is clicked, the text will be changed to "Text updated".
*   
*   There´s no way to create a callback to the controller directly, the whole page needs to reload,
*   there needs to be some code to route the action back to the controller.
*   On the web the only way to access the controller is another HTTP request.
*/ 

/* Part 1 - Hello World - with user interaction */

class Model {
    public $text;
    public function __construct(){

    }

    public $BookCase = array
      (
      array("Fórnarlamb án andlits","Smíðakennari finnst myrtur. Hjá líkinu liggur gömul bekkjarmynd og krassað hefur verið yfir andlits hins myrta. Brátt kemur í ljós að hér er fjöldamorðingi á ferð. Hver bekkjarfélaganna skyldi verða næstur? Ein snjallasta glæpasaga síðari ára sem farið hefur sigurför um heiminn."),
      array("Hættuspil","Áhrifamikil spennusaga um brostnar vonir, bældar minningar og dulda skömm. Sjötta bókin í hinni geysivinsælu Sandham-seríu um lögfræðinginn Nóru Linde og lögreglumanninn Thomas Amdreasson."),
      array("Leikvöllurinn","Jasmin Pascal-Anderson er liðsforingi í sænska hernum. Við skyldustörf á vegum NATO í Kosovo særist hún alvarlega og hjarta hennar stöðvast í eina mínútu og fjörtíu sekúndur. Þegar hún kemst til meðvitundar segir hún frá því að á milli lífs og dauða sé ógnvænlegur staður, ofbeldisfull hafnarborg þar sem von um líf gengur kaupum og sölum. Og versti staðurinn þar er leikvöllurinn. Þegar þarf að stöðva hjarta sonar hennar í örstutta stund í aðgerð eftir alvarlegt bílslys treystir Jasmin drengnum ekki til að hafa það af einsamall í heiminum hinu megin. Þá eru engin ráð önnur en að fylgja honum yfir um ... Leikvöllurinn er sjötta spennubók Lars Kepler en á bak við það nafn standa hjónin Alexandra og Alexander Ahndoril. Fyrri bækur þeirra hafa notið mikilla vinsælda víða um heim og verið þýddar á fjölda tungumála.")
      );

}
// Bætum við link
class View { 
    private $model; 
    
    // tekur inn model object
    public function __construct(Model $model) { 
        $this->model = $model; 
    } 

   
    // beintengt (sækir) view - model, birtir Hello world! 
    public function output() {
        $result = "";
        for ($i=0; $i < count($this->model->BookCase); $i++) { 
            $result .= '<option value="'. $i.'">'. $this->model->BookCase[$i][0]. '</option>';
        }
        return '<form method="get" action="index.php"><select name="BookSelector">' . $result . '</select> <input type="submit" /></form>' . $this->model->text;
    } 
     
} 

class Controller { 
    private $model; 

    // tekur inn model object
    public function __construct(Model $model) { 
        $this->model = $model; 
    }
    public function Submit($numberofbook) {
        $this->model->text = '<h1>'.$this->model->BookCase[$numberofbook][0] . '</h1><p>' .$this->model->BookCase[$numberofbook][1]. '</p>';
    }
} 



//initiate the triad 
$model = new Model(); 
//It is important that the controller and the view share the model 
$controller = new Controller($model); 
$view = new View($model); 

/**
  * On the callback (second request, þegar smellt er á textatengil) ALL the components must be re-initialised. 
  * Some code must be added to route the action back to the controller:
 */
    // ef smellt er á tengil ($_GET er ekki tómt)
if (isset($_GET['BookSelector'])) 
    // call the relevant controller action (specified by $_GET['action']) based on the user interaction.
    // Samt varhugaverð útfærsla, hér er verið að taka við hrágögnu án þessa að checka á input
    $controller->submit($_GET['BookSelector']);   // sama og $controller->textclicked þ.e. method virkjuð og model uppfært,  

// birting, fer eftir user action að ofan
echo $view->output();

/**
 * part 2: MVC on the web, routing (problems)
 * part 3: how to create a fully functional router from scratch.
 */
