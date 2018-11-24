<?php
    $group_id = $this->Session->read('Auth.User.group_id');
    $expires = $this->Session->read('Auth.User.expires');
    $expired = (time() > strtotime($expires));
?>
<ul class="nav navbar-nav navbar-right navbar-authed">
    <?php if($group_id <= Group::BOARDMEMBER): ?>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Board Member<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li role="presentation" class="dropdown-header">Events</li>
            <li><a href="/manage/events/"><i class="fa fa-calendar"></i>&nbsp;Events</a></li>
            <li><a href="/manage/divisions/"><i class="fa fa-sitemap"></i>&nbsp;Divisions</a></li>
            <li><a href="/manage/sponsors/"><i class="fa fa-usd"></i>&nbsp;Sponsors</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation" class="dropdown-header">Club Members</li>
            <li><a href="/manage/users/"><i class="fa fa-user"></i>&nbsp;Members</a></li>
            <li><a href="/manage/tags/"><i class="fa fa-tags"></i>&nbsp;Tags</a></li>
            <li><a href="/manage/aces/"><i class="fa fa-ace"></i>&nbsp;Aces</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation" class="dropdown-header">Club Info</li>
            <li><a href="/manage/polls/"><i class="fa fa-clipboard"></i>&nbsp;Polls</a></li>
            <li><a href="/manage/blogs/"><i class="fa fa-bookmark"></i>&nbsp;Blogs</a></li>
            <li><a href="/manage/courses/"><i class="fa fa-flag"></i>&nbsp;Courses</a></li>
            <li><a href="/manage/meetings/"><i class="fa fa-bullhorn"></i>&nbsp;Meetings</a></li>
            <li><a href="/manage/locations/"><i class="fa fa-map-marker"></i>&nbsp;Locations</a></li>
            <li role="presentation" class="divider"></li>
            <li role="presentation" class="dropdown-header">Bugs</li>
            <li><a href="/manage/bugs/report"><i class="fa fa-bug"></i>&nbsp;Report a Bug</a></li>
            <li><a href="/manage/bugs/"><i class="fa fa-bug"></i>&nbsp;Current Bug List</a></li>
            <?php if($group_id <= Group::WEBADMIN): ?>
            <li role="presentation" class="divider"></li>
            <li role="presentation" class="dropdown-header">Webmaster only</li>
            <li><a href="/manage/contents/"><i class="fa fa-file-text-o"></i>&nbsp;Pages</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>

    <?php if($group_id <= Group::CLUBMEMBER): ?>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Members Only<b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="/manage/tags/post"><i class="fa fa-tag"></i>&nbsp;Post My Tag</a></li>
            <li><a href="/manage/tags/log"><i class="fa fa-tags"></i>&nbsp;My Tag Log</a></li>
            <li><a href="/manage/aces/post"><i class="fa fa-ace"></i>&nbsp;Post My Ace</a></li>
            <li><a href="/manage/aces/log"><i class="fa fa-list"></i>&nbsp;View My Aces</a></li>
            <li><a href="/manage/polls/available"><i class="fa fa-clipboard"></i>&nbsp;View Available Polls</a></li>
            <?php if($group_id <= Group::TAGMASTER): ?>
            <li role="presentation" class="divider"></li>
            <li role="presentation" class="dropdown-header">Tagmasters only</li>
            <li><a href="/manage/tags/batch/"><i class="fa fa-tags"></i>&nbsp;Tag Batch</a></li>
            <li><a href="/manage/tagmatches/"><i class="fa fa-calendar"></i>&nbsp;Edit Schedule</a></li>
            <?php endif; ?>
        </ul>
    </li>
    <?php endif; ?>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?=
                $this->Gravatar->image(
                    $user['email'],
                    array(
                        'size'=>20,
                        'rating'=>'g',
                        'default'=>urlencode(str_replace('dev.', '', $this->Html->url('/files/users/avatars/default_user.gif', true)))
                    ),
                    array(
                        'alt' => 'user avatar',
                        'style' => 'width:20px; height:20px; padding:0; margin:0;'
                    )
                );
            ?>
            Me <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li><a href="/manage/users/welcome"><i class="fa fa-dashboard"></i>&nbsp;My Dashboard</a></li>
            <li><a href="/manage/users/myinfo/"><i class="fa fa-info"></i>&nbsp;My Info</a></li>
            <li><a href="/manage/users/passwd/"><i class="fa fa-key"></i>&nbsp;Change My Password</a></li>
            <li><a href="/manage/users/logout"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
        </ul>
    </li>
</ul>
