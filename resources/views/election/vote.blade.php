<!DOCTYPE html>
<html>
    <head>
        <title> lets vote !</title>
        
        {{ Html::style('css/mycss.css') }}
        {{ Html::style('css/cs.css') }}

    </head>
    <body class="bg-cyan">
        <div class="body body-s">


            <form action="{{route('vote')}}"  method="POST" class="sky-form">
                {{csrf_field()}}
                <header>JKUAT's president {{Html::image('img/logo.png','',['padding'=>'200px'])}}</header>
                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                <fieldset>
                 <select name="president" class="select">

                        @foreach($presidentials as $presidential)
                            <option value="{{$presidential->id}}">{{$presidential->name}}</option>
                        @endforeach
                                      </div>
                               </select>
                </fieldset>

                <header>Vice president</header>
                 <fieldset>
                 <select class="select" name="vice">
                        @foreach($vices as $vice)
                            <option value="{{$vice->id}}">{{$vice->name}}</option>
                        @endforeach
                                      </div>
                               </select>
                </fieldset>

            <header>Secretary General</header>
             <fieldset>
                 <select class="select" name="secretary">
                         @foreach($secs as $sec)
                            <option value="{{$sec->id}}">{{$sec->name}}</option>
                        @endforeach
                                      </div>
                               </select>
                </fieldset>

            <header>Finance secretary</header>
            <fieldset>
                 <select class="select" name="finance">
                         @foreach($finances as $finance)
                            <option value="{{$finance->id}}">{{$finance->name}}</option>
                        @endforeach
                                      </div>
                               </select>
                </fieldset>

                <header>Treasurer</header>
                <fieldset>
                     <select class="select" name="treasurer">
                             @foreach($treasurers as $treasurer)
                                <option value="{{$treasurer->id}}">{{$treasurer->name}}</option>
                            @endforeach
                                          </div>
                                   </select>
                    </fieldset>
                
                    <header>Sport Director</header>
                    <fieldset>
                         <select class="select" name="spdir">
                                 @foreach($spdirs as $spdir)
                                    <option value="{{$spdir->id}}">{{$spdir->name}}</option>
                                @endforeach
                                              </div>
                                       </select>
                        </fieldset>

                        <header>Social Director</header>
                    <fieldset>
                         <select class="select" name="sodir">
                                 @foreach($sodirs as $sodir)
                                    <option value="{{$sodir->id}}">{{$sodir->name}}</option>
                                @endforeach
                                              </div>
                                       </select>
                        </fieldset>
                       
                        <header>PRO</header>
                        <fieldset>
                             <select class="select" name="pro">
                                     @foreach($pros as $pro)
                                        <option value="{{$pro->id}}">{{$pro->name}}</option>
                                    @endforeach
                                                  </div>
                                           </select>
                            </fieldset>
                <footer>
                    <button type="submit" class="button">Vote</button>
                </footer>
            </form>

        </div>
    </body>
</html>
