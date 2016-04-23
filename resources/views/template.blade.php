@if (Auth::guest())

 <script type="text/javascript">
   window.location = "/";
 </script>

@else

@extends('layout')

@section('content')
  <!--Import jQuery before materialize.js-->
  <!-- <script type="text/javascript" src="js/jquery.js"></script>-->
    <div id="popBack"></div>

  <div id="education_content"> 
    <!--                                       Edication  Card                 -->
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">EDUCATION</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
            {!! Form::open(array('url' => '/template')) !!}
              <form class="col s12 m12" action="">
                <div class="row">
                  <div class="input-field col s3 m3">
                      {!! Form::text('education_date', '', ['class' => 'validate']) !!}
                    <label class="active" for="date">Dates</label>
                  </div>

                  <div class="input-field col s5 m5 offset-s1 offset-m1">
                    {!! Form::text('education_degree', '', ['class' => 'validate']) !!}
                    <label class="active" for="degree">Degree</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('education_name', '', ['class' => 'validate']) !!}
                    <label class="active" for="sch_name">School,college,university name</label>
                  </div>
                </div>
                <div class="row" id="text">
                  <div class="input-field col s12 m12">
                    {!! Form::text('education_info', '', ['class' => 'validate']) !!}

                    <label class="active" for="info_edic">Extra information about edication</label>
                  </div>
                   {!! Form::text('cv_id', '', ['class' => 'validate']) !!}
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action" id="add">
                      <a class="btn-flat grey col s12 m12">+ ADD MORE</a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
             {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>

  </div>
  <!-- workd edit popup start -->
  <div id="work_content"> 
    <!--              Work experience Card                           -->
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">WORK EXPERIENCE</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '/workcreate')) !!}
                <div class="row">
                  <div class="input-field col s3 m6">
                    {!! Form::text('work_date', '', ['class' => 'validate']) !!}
                    <label class="active" for="date">Dates</label>
                  </div>

                  <div class="input-field col s5 m6">
                    {!! Form::text('work_profession', '', ['class' => 'validate']) !!}
                    <label class="active" for="position">Position</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('work_company', '', ['class' => 'validate']) !!}
                    <label class="active" for="com_name">Company, organization name</label>
                  </div>
                </div>
                <div class="row" id="textExp">
                  <div class="input-field col s12 m12">
                    {!! Form::text('work_info', '', ['class' => 'validate']) !!}
                    <label class="active" for="info_exp">Extra information about experience</label>
                  </div>
                  {!! Form::text('cv_id', '', ['class' => 'validate']) !!}
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action" id="addExp">
                      <a class="btn-flat grey col s12 m12" >+ ADD MORE</a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>

  </div>

  <!-- workd edit popup end -->

  <div class="verticalAlign"></div>
  <div class="">
    <div class="row">

      <div class="col s12 m2 offset-m1">
        <div class="card black darken-1">
          <div class="card-content grey-text">
            <div class="row"><span >Select color</span></div>
            <div class="row">
            <ul class="pagination">
              <li class="waves-effect"><a href="#!"><div class="teal ball" name="teal-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="blue ball" name="blue-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="red ball" name="red-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="purple ball" name="purple-text"></div></a></li>
            </ul>
            </div>
            <a href="#" class="btn grey btn-text"> <i class="material-icons left">loop</i>Change design</a>
            <a href="#" class="btn  grey btn-text"> <i class="material-icons left">description</i>Save as draft</a>
          </div>
          <div class="card-action">
            <a href="#" class="waves-effect waves-light btn">PUBLISH</a>

          </div>
        </div>
      </div>



      <div class="col s12 m9">


       <div class="col s12 m3">
        <div class="card">
          <div class="card-image">
            <img src="images/1.png" class="responsive-img">
          </div>
          <div class="card-content">
            <blockquote class=" grey-text">
              +994 55 885 73 09
            </blockquote>

            <blockquote class=" grey-text">
              knyaz.yaqublu@gmail.com
            </blockquote>

            <blockquote class=" grey-text">
              twitter.com@knyaz
            </blockquote>

            <blockquote class=" grey-text">
              www.knyazik.com
            </blockquote>

            <blockquote class=" grey-text">
              Ataturk ave.33 Baku Azerbaijan
            </blockquote>
            <div class="languages">
              <i class="material-icons left grey-text">language</i><h5 class="blue-text " name="desingText">LANGUAGES</h5>
              <div class="">
              <span class="grey-text text-darken-2">ENGLISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>         
              </div>
              <div class="">
              <span class="grey-text text-darken-2">RUSSIAN</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              </div>
              <div class="">
          <span class="grey-text text-darken-2">SPANISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              </div>
              <div>
              <span class="grey-text text-darken-2">TURKISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>
            </div>
           
            <div class="skills">
              

           
            
              <i class="material-icons left grey-text">list</i><h5 class="blue-text  " name="desingText">SKILLS</h5>
              <div>
              <span class="grey-text text-darken-2">PHOTOSHOP</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>
              <div>
              <span class="grey-text text-darken-2">HTML/CSS</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>
              <span class="grey-text text-darken-2">ILLUSTRATOR</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <div>
              <span class="grey-text text-darken-2">SKETCH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              </div>

             </div>
             <div class="awards">

              <i class="material-icons left grey-text">grade</i><h5 class="blue-text" name="desingText">AWARDS</h5>
              <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <a class="btn grey black-text"><i class="material-icons center">add</i> <span>ADD MORE</span></a>

          </div>

        </div>
      </div>




      <div class="col s12 m9 right white">
        <div class="card white darken-1">
          <div class="card-content grey-text">
          <div>
            <h2 class=" blue-text text-darken-3" name="desingText"><b>KNYAZ YAQUBOV</b></h2>
            <h5 class="grey-text"><b>GRAPHIC DESIGNER</b></h5>
            <h6 class="grey-text">Date of birth: 02.06.1989</h6>

            <p class="grey-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia 
              perspiciatis est porro. Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. 
               Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. Earum pariatur hic eaque, est
                 architecto odit quae cupiditate?</p>

                 </div>
<div id="sortable">
                <div class="row">

                   <div class="edit">
                    <form action="">
                      <fieldset>
                        <legend>
                          <ul class="fieldset">
                            <li><a class="btn" id="education_edit_icon"><i class="material-icons">edit</i></a></li>
                            <li class="upIcon"> <a class="btn waves-effect waves-light"><i class="material-icons">keyboard_arrow_up</i></a></li>
                            <li class="downIcon"> <a class="btn"><i class="material-icons">keyboard_arrow_down</i></a></li>
                          </ul>
                         
                         
                         
                        </legend>
                    <div class="sectionWrapper">
                            <i class="material-icons left grey-text">school</i><h5 class="blue-text" name="desingText">EDUCATION</h5>
                    @foreach($userEducations as $userEducation)
                    <div class="row"> 
                      <span class=" grey-text text-darken-2"><b style="text-transform: uppercase">{{$userEducation->education_date}} {{$userEducation->education_name}}
                    </b></span> <br>
                    <span class="grey-text text-darken-2" style="text-transform: uppercase">{{$userEducation->education_degree}}</span>
                    <p class="grey-text">{{$userEducation->education_info}}</p>
                    </div>
                     @endforeach
                      </fieldset>

                    </form>
                    
                    </div>


            </div>
                 
                
            <div class="row">
              
                <div class="edit">
                  <form action="">
                      <fieldset>
                        <legend>
                       
                          <ul class="fieldset">
                            <li><a class="btn" id="workcontent_icon"><i class="material-icons">edit</i></a></li>
                            <li class="upIcon"> <a class="btn waves-effect waves-light"><i class="material-icons">keyboard_arrow_up</i></a></li>
                            <li class="downIcon"> <a class="btn"><i class="material-icons">keyboard_arrow_down</i></a></li>
                          </ul>
                         
                         
                         
                        </legend>
              <div class="sectionWrapper">
              <i class="material-icons left grey-text">work</i><h5 class="blue-text " name="desingText">WORK EXPERIENCE</h5>
              @foreach($userWorks as $userWork)
              <div class="row">
                <span class=" grey-text text-darken-2"><b style="text-transform: uppercase">{{$userWork->work_date}} {{$userWork->work_company}}</b></span> <br>
              <span class="grey-text text-darken-2" style="text-transform: uppercase">{{$userWork->work_profession}}</span>
              <p class="grey-text">{{$userWork->work_info}}</p> 

              </div>
              @endforeach
              </div>
                  </fieldset>
                </form>
            </div>

            </div>
            </div>

            <a class="btn grey black-text"><i class="material-icons center">add</i> <span>ADD MORE</span></a>

            </div>
           
          </div>
        </div>
        </div>
      </div>



    </div>




  </div>



<script type="text/javascript" src="js/jquery.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript">
$('#education_edit_icon').click(function(){

      $("#popBack").fadeIn();
      $("#education_content").fadeIn();
      
      return false;

    });

    $('#popBack').click(function(){

      $("#popBack").fadeOut();
      $("#education_content").fadeOut();

      return false;

    });

    $('#workcontent_icon').click(function(){

      $("#popBack").fadeIn();
      $("#work_content").fadeIn();
      
      return false;

    });

    $('#popBack').click(function(){

      $("#popBack").fadeOut();
      $("#work_content").fadeOut();

      return false;

    });
    $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  $(document).ready(

      function(){
        $(".ball").click(function(){
             
              var a = $(this).attr("name");
             $("[name=desingText]").removeClass("red-text blue-text teal-text purple-text");
          

          $("[name=desingText]").addClass(a);

          
       
        });

      $(".upIcon").click(function () {
         $(this).parent().parent().parent().find(".sectionWrapper").hide("slow");
         $(this).parent().parent().parent().addClass("showField");
      });
      $(".downIcon").click(function () {
         $(this).parent().parent().parent().find(".sectionWrapper").show("slow");
         $(this).parent().parent().parent().removeClass("showField");
      });
}
);
</script>
@endsection
@endif