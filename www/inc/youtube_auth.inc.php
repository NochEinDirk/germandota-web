<?

/* germandota.de - Sources of the website
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once dirname(__FILE__). '/common.inc.php';
include_once dirname(__FILE__). '/youtube_constants.inc.php';

include_once dirname(__FILE__). '/google_api.inc.php';

/* Progamming Guide:
 *
 * https://developers.google.com/youtube/v3/guides/authentication#server-side-apps
 */

define('_YT_AUTH_OAUTH2_SCOPE',
       'https://www.googleapis.com/auth/youtube.readonly');

/* ***************************************************************  */

function yt_auth_print_link($descr, $html)
{
  $href = common_url_amp(google_oauth2_login_url_get(
    _YT_AUTH_OAUTH2_SCOPE, array(1, 2, 3, 4)));

  // TODO: Need a redirection page ...

  ?><a class="auth_link" target="auth" title="<? _o($descr); ?>"<?
  ?> onclick="return auth_popup('<? echo $href; ?>');"<?
  ?> href="javascript:void()"><?
    echo $html;
  ?></a><?
}
