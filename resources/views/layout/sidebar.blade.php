 <div class="sidebar">

        <a href="{{route('home')}}" class="logo-box">
           <img src="{{asset('/images/feedback.png')}}" width="50" height="50">
            <h3 class="logo-name">FEEDBACK<br><span style="font-size:20px;">MANAGEMENT</span></h3>
        
        </a>
   
<hr>
<div class="side-profile">
       <div class="input-group">
    <input type="text" class="src" id="text" name="search" placeholder="Search Something..." autocomplete="off">
    <input class="button--submit" value="Search" type="submit">
</div>
      </div>
       <br>
     <hr>       
        <ul class="sidebar-list">
        <span class="sidebar-title">Main Navigation</span>
            <li>  
                <div class="title">
                    <a href="{{route('home')}}" class="link">
                      <i class="fa-brands fa-microsoft"></i>
                        <span class="name">Dashboard</span>
                    </a>  
                </div>
            </li> 

            <li class="dropdown">
                <div class="title">
                    <a href="{{route('feedback')}}" class="link">
                       <i class="fa-solid fa-comments"></i>
                        <span class="name">Feedbacks </span>
                    </a>
                    
                </div>
            
            </li>

        
      
            <li>
                <div class="title">
                    <a href="{{route('users')}}" class="link">
                   <i class="fa-solid fa-users"></i>
                        <span class="name">Users</span>
                    </a>
                  
                </div>
            </li>

            <li>
                <div class="title">
                      <a href="{{route('report')}}" class="link">
                   <i class="fa-solid fa-chart-simple"></i>
                        <span class="name">Report</span>
                    </a>
                   
                </div>
                
            </li>

          
            <li>
                <div class="title">
                    <a href="{{route('help')}}" class="link">
              <i class="fa-solid fa-compass"></i>
                        <span class="name">Help & Support</span>
                    </a>
                    
                </div>
            </li>


        </ul>
  </div>

