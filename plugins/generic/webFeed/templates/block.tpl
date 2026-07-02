{**
 * plugins/generic/webFeed/templates/block.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Feed plugin navigation sidebar.
 *
 *}
<div class="block_web_feed" style="
    text-align: center;
    padding: 10px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
	margin-top: 15px;
">
	<h2 class="title">Journals</h2>
	<div class="content">
  <ul>
    <li><a href="{$baseUrl}/index.php/mrej-Journals">Multidisciplinary Research and Extension Journal</a></li>
    <li><a href="{$baseUrl}/index.php/Journals">Agrikultura: Research and Innovation Journal</a></li>
  </ul>
</div>

<style>

.title{
	font-size: 20px;
	font-weight: 500;
	color: green;
}
  .content {
    color: #1f7b4c;
    font-size: 0.80em;
    margin-bottom: 10px;
  }

  .content ul {
	text-align: left;
    gap: 20px;
    padding: 15px 25px;
    border-radius: 16px;
    list-style: none;
  }

  .content a {

    text-decoration: none;
    transition: all 0.3s ease;
  }

  .content a:hover {
    color: #135636;
    text-decoration: underline;
    text-underline-offset: 4px;
    transform: scale(1.05);
  }
</style>

</div>
