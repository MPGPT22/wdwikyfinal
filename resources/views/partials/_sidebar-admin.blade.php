<div class="sidebar sidebar-grid" id="sidebar" style="position: fixed;">
    <div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header">Navigation</li>

      @if (Auth::user()->adminRole == "GameMaster")

      <li class="has-sub ">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-double-team"></i>
          <span>Characters</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('characters.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('characters.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-aura "></i>
          <span>Classes</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('classes.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('classes.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-spinning-sword"></i>
          <span>Skills</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('skills.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('skills.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra  ra-frostfire "></i>
          <span>Spells</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('spells.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('spells.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-level-three-advanced"></i>
          <span>States</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('states.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('states.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-crossed-swords"></i>
          <span>Weapons</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('weapons.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('weapons.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-vest "></i>
          <span>Armors</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('armors.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('armors.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-heart-bottle "></i>
          <span>Items</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('items.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('items.index') }}">List</a>

          </li>
        </ul>
      </li>

      @elseif (Auth::user()->adminRole == "Creator")

      <li class="has-sub ">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-double-team"></i>
          <span>Characters</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('characters.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('characters.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-aura "></i>
          <span>Classes</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('classes.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('classes.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-spinning-sword"></i>
          <span>Skills</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('skills.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('skills.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra  ra-frostfire "></i>
          <span>Spells</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('spells.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('spells.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-level-three-advanced"></i>
          <span>States</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('states.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('states.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-crossed-swords"></i>
          <span>Weapons</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('weapons.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('weapons.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-vest "></i>
          <span>Armors</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('armors.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('armors.index') }}">List</a>

          </li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <b class="caret"></b>
          <i class="ra ra-heart-bottle "></i>
          <span>Items</span>
        </a>
        <ul class="sub-menu">
          <li class=" ">
            <a href="{{ route('items.create') }}">Create</a>

          </li>
          <li class=" ">
            <a href="{{ route('items.index') }}">List</a>

          </li>
        </ul>
      </li>

      @elseif (Auth::user()->adminRole == "Comment Checker")

      <li>
        <a href="{{ route('characters.index') }}">
          <i class="ra ra-double-team"></i>
          <span>Characters</span>
        </a>
      </li>
      <li>
        <a href="{{ route('classes.index') }}">
          <i class="ra ra-aura "></i>
          <span>Classes</span>
        </a>
      </li>
      <li>
        <a href="{{ route('skills.index') }}">
          <i class="ra ra-spinning-sword"></i>
          <span>Skills</span>
        </a>
      </li>
      <li>
        <a href="{{ route('spells.index') }}">
          <i class="ra  ra-frostfire "></i>
          <span>Spells</span>
        </a>
      </li>
      <li>
        <a href="{{ route('weapons.index') }}">
          <i class="ra ra-crossed-swords"></i>
          <span>Weapons</span>
        </a>
      </li>
      <li>
        <a href="{{ route('armors.index') }}">
          <i class="ra ra-vest "></i>
          <span>Armors</span>
        </a>
      </li>
      <li >
        <a href="{{ route('items.index') }}">
          <i class="ra ra-heart-bottle "></i>
          <span>Items</span>
        </a>
      </li>

      @endif



								<!-- begin sidebar minify button -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			<!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
</div>
<div class="sidebar-bg"></div>
