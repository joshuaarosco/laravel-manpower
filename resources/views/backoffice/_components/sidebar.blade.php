<aside class="main-sidebar">
	<!-- sidebar-->
	<section class="sidebar position-relative">
		<div class="multinav">
			<div class="multinav-scroll" style="height: 100%;">	
				<!-- sidebar menu-->
				<ul class="sidebar-menu" data-widget="tree">				
					<li>
						<a class="{{in_array(request()->route()->getName(),['backoffice.index'])?'text-primary':''}}" href="{{route('backoffice.index')}}">
							<i data-feather="monitor" class="{{in_array(request()->route()->getName(),['backoffice.index'])?'text-primary':''}}"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="treeview {{Request::is('backoffice/workforce*')?'menu-open':''}}">
						<a href="#" class="{{Request::is('backoffice/workforce*')?'text-primary':''}}">
							<i data-feather="users" class="{{Request::is('backoffice/workforce*')?'text-primary':''}}"></i>
							<span>Workforce</span>
							<span class="pull-right-container">
								<i class="ti-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu {{Request::is('backoffice/workforce*')?'display-block':''}}">	
							<li><a class="{{in_array(request()->route()->getName(),['backoffice.workforce.index'])?'text-primary':''}}" href="#"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
						</ul>	
					</li>
					<li class="treeview {{Request::is('backoffice/jobs*')?'menu-open':''}}">
						<a href="#" class="{{Request::is('backoffice/jobs*')?'text-primary':''}}">
							<i data-feather="briefcase" class="{{Request::is('backoffice/jobs*')?'text-primary':''}}"></i>
							<span>Jobs</span>
							<span class="pull-right-container">
								<i class="ti-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu {{Request::is('backoffice/jobs*')?'display-block':''}}">	
							<li><a class="{{in_array(request()->route()->getName(),['backoffice.jobs.index'])?'text-primary':''}}" href="{{ route('backoffice.jobs.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
							<li><a class="{{in_array(request()->route()->getName(),['backoffice.jobs.create'])?'text-primary':''}}" href="{{ route('backoffice.jobs.create') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Create</a></li>
						</ul>	
					</li>
					    
				</ul>
				
				<div class="sidebar-widgets">
					<div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
						<div class="text-center">
							<img src="{{asset('images/manpower-side.png')}}" class="sideimg p-5" alt="">
							<h4 class="title-bx text-primary">Look for Manpower</h4>
							<a href="#" class="py-10 fs-14 mb-0 text-primary">
								Best Worker here <i class="mdi mdi-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="copyright text-center m-25">
						<p><strong class="d-block">{{config('app.name')}}</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</aside>