<?php

/**
 * Description of doc
 *
 * @author David Marsalone
 */
class DocController extends Controller{
    
    /**
     *
     * @param string $page the page to display
     * @return View
     */
    public function index($page=null){
        
        //if too much arguments redirect to the best page url
        if(func_num_args()>1){
            $this->redirect302($this->routeToFunction."/$page");
        }
        
        $vv=  VV_doc_page::getPage($page);
        
        //if no page found display the 404
        if(!$vv){
            //custom 404 error page for doc section.
            $this->setHeader404();
            $vv= new VV_404();
            $vv->message="The page ".Site::url($this->route,true)." cannot be found";
            return new View("doc/404",$vv);
        }
        
        
        $view=new View($vv->templateUrl,$vv);
        return $view;
    }
    
}
