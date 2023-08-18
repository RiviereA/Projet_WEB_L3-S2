<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Choix partie</title>
    <link rel="stylesheet" type="text/css" href="projet.css">
	<script type="text/javascript" src="projet.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body onload="init();">
    <header>
    	<?php include("menus.php"); ?>
    </header>
    <div id="contenu">
    	<!-- Contenue des règles -->
    	<div class="page">
			<h1>Règle française du jeu de go</h1>

			<br/>
			<h2>1 Introduction</h2>
			<br/>
				<p>Le jeu de go est né en Chine il y a plusieurs milliers d'années.
				Il se joue au Japon depuis 1200 ans, mais il ne s'est répandu que
				récemment en occident. Le but du jeu est la
				constitution de territoires en utilisant un matériel des plus
				simples: un plateau, appelé goban,
				sur lequel est tracé un quadrillage et des pions, appelés pierres, que l'on pose sur les intersections de ce
				quadrillage à tour de rôle. Les règles s'apprennent en
				quelques minutes et permettent aux débutants de faire rapidement des
				parties passionnantes. Ensuite, ceux qui voudront explorer plus avant les
				subtilités du jeu pourront rejoindre un club et participer à des
				tournois. Ils pourront alors constater que sous son apparente simplicité
				qui le rend accessible même aux plus jeunes, le jeu de go est d'une
				richesse inépuisable. En attendant, ces quelques pages guideront leurs
				premiers pas.
				</p>

				<br/>
			<h2>2 Matériel</h2>
			<br/>
				<p>Le matériel de jeu traditionnel se compose d'un goban sur lequel est tracé un quadrillage de 19x19
				lignes, soit 361 intersections, et de pierres qui sont soit noires, soit
				blanches. Mais rien n'empêche les joueurs d'utiliser un autre
				matériel, et en particulier des gobans de 13x13 ou
				9x9 lignes pour les parties d'initiation.</p>

				<p>Généralement, la distance entre deux lignes du goban est approximativement de 24 mm dans le sens de la
				longueur et de 22 mm dans le sens de la largeur: le goban n'est donc pas tout à fait carré. Quant aux
				pierres, elles sont de forme biconvexe et d'un diamètre d'environ 22
				mm.</p>

				<div class="figure">
					<img src="Images/grille.gif"><br>
					Voici un goban de 19x19 lignes. Remarquez que
					certains points sont renforcés. On les appelle hoshi.
				</div>

			<br/>
			<h2>3 Chaîne et libertés</h2>
			<br/>
				<p>Deux intersections sont dites voisines quand elles sont sur la même
				ligne et sans autre intersection entre elles.</p>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/voisines.gif"></td>
							<td><p>Diag. 1: 'a' et 'b' sont des intersections
							voisines, mais 'b' et 'c' ne le sont pas.</p></td>
						</tr>
					</tbody>
				</table>

				<p>Deux pierres sont voisines si elles occupent des intersections voisines.</p>

				<p>Une chaîne est un ensemble de une ou
				plusieurs pierres de même couleur voisines de proche en proche.</p>

				<p>Les libertés d'une chaîne sont les
				intersections inoccupées voisines des pierres de cette chaîne.</p>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/libertes.gif"></td>
							<td><p>Diag.2: Les quatre pierres blanches marquées d'un 'X' sont
							voisines de proche en proche. Elles forment une chaîne qui a cinq
							libertés: les intersections marquées par les lettres 'a',
							'b', 'c', 'd', et 'e'.</p></td>
						</tr>
					</tbody>
				</table>

			<br/>
			<h2>4 Territoire</h2>
			<br/>
				<p>Un territoire est un ensemble de une ou
				plusieurs intersections inoccupées voisines de proche en proche, 
				délimitées par des pierres de même
				couleur.</p>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/territoire.gif"></td>
							<td><p>Diag.3: Les pierres noires délimitent un territoire de 7
							intersections. Notez que le bord de la grille forme une frontière
							naturelle du territoire, mais on pourrait bien sûr avoir un territoire qui
							ne touche pas du tout le bord (imaginez que la grille est un continent
							entouré par la mer, que le bord de la grille représente le rivage,
							et que les pierres représentent les frontières entre les pays de ce
							continent).</p></td>
						</tr>
					</tbody>
				</table>

			<br/>
			<h2>5 Déroulement du jeu</h2>
			<br/>
				<p>Le go se joue à deux. Celui qui commence joue avec les
				pierres noires et l'autre avec les blanches. A tour de rôle, les joueurs
				posent une pierre de leur couleur sur une intersection inoccupée du goban ou bien ils passent.</p>

				<p>Passer sert essentiellement à indiquer à l'adversaire que l'on
				considère la partie terminée.</p>

			<br/>
			<h2>6 Capture</h2>
			<br/>
				<p>Lorqu'un joueur supprime la dernière liberté d'un
				chaîne adverse, il la capture en retirant du goban les pierres de cette chaîne. De plus, en posant
				une pierre, un joueur ne doit pas construire une chaîne sans
				liberté, sauf si par ce coup il capture une chaîne adverse.</p>

				<p>Lorsqu'une chaîne n'a plus qu'une liberté, on
				dit qu'elle est en atari.</p>

				<div class="figure">
				<table>
					<tbody>
						<tr>
							<td style="width:33%">
							<img src="Images/priseSimple1.gif">
							</td>
							<td>
							<img src="Images/priseSimple2.gif">
							</td>
							<td>
							<img src="Images/priseSimple3.gif">
							</td>
						</tr>
						<tr>
							<td>
							<p>
							Diag.4: Les trois pierres blanches 'X' forment une chaîne qui est en
							atari (car elle n'a plus qu'une liberté, en 'a').</p>
							</td>
							<td>
							<p>
							Diag.5: Si Noir joue en 1, il supprime la dernière liberté des pierres blanches...</p>
							</td>
							<td>
							<p>
							Diag.6: ...alors Noir capture les pierres blanches et les retire du goban.</p>
							</td>
						</tr>
					</tbody>
				</table>
				</div>

			<br/>
			<h2>7 Vie et mort</h2>
			<br/>
				<p>De la règle de capture découle la notion de vie et de
				mort: des pierres mortes sont des pierres
				que l'on est sûr de pouvoir capturer sans y perdre par ailleurs, tandis que
				des pierres vivantes sont des pierres que l'on ne
				peut plus espérer capturer.</p>

				<div class="figure">
				<table>
					<tbody>
						<tr>
							<td style="width:33%">
							<img src="Images/mort.gif">
							</td>
							<td>
							<img src="Images/vie.gif">
							</td>
							<td>
							<img src="Images/seki.gif">
							</td>
						</tr>
						<tr>
							<td>
							<p>
							Diag.7: D'après la règle de capture, Blanc peut jouer en 'a' et prendre Noir. On dit dans ce cas que Noir n'a qu'un œil (l'intersection 'a') et qu'il est mort.</p>
							</td>
							<td>
							<p>
							Diag.8: Blanc ne pouvant jouer ni en 'b', ni en 'c', il ne pourra jamaiscapturer Noir. On dit alors que Noir a deux yeux (les intersections 'b' et 'c')et qu'il est vivant.</p>
							</td>
							<td>
							<p>
							Diag.9: Si Noir joue en 'd' (ou 'e'), Blanc jouera en 'e' (ou 'd') et le capturera. De même, si Blanc joue en 'd' (ou 'e'), Noir le capturera.
							Autrement dit, personne n'a intérêt à jouer en 'd' ou 'e'. Dans ce cas, on dit que les pierres 'X' sont vivantes par seki, et que 'd' et 'e' sont des intersections neutres.</p>
							</td>
						</tr>
					</tbody>
				</table>
				</div>

			<br/>
			<h2>8 Répétition</h2>
			<br/>
				<p>Un joueur, en posant une pierre, ne doit pas redonner au goban un état identique à l'un de ceux qu'il lui
				avait déjà donné.</p>

				<p>Les diagrammes qui suivent montrent le cas de
				répétition le plus simple et le plus fréquent que l'on
				appelle aussi ko.</p>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/repetition1.gif"></td>
							<td><p>Diag.10: Si Noir joue en 'a', il capture la pierre blanche 'X' qui est en atari.</p></td>
						</tr>
					</tbody>
				</table>
				<br>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/repetition2.gif"></td>
							<td><p>Diag.11: Blanc ne peut pas rejouer immédiatement en 'b' et prendre
							la pierre noire 1 qui est pourtant en atari car, sinon, il
							reproduirait la situation du diagramme 10. Il doit donc jouer ailleurs. Toute
							l'astuce pour Blanc consiste, avec ce coup ailleurs, à essayer de
							créer une menace suffisamment grave pour que Noir ait intérêt
							à y répondre immédiatement, et n'ait pas le temps de jouer
							lui-même en 'b'. Si Noir répond à la menace, Blanc pourra
							à nouveau jouer en 'b', puisque son coup précédent aura
							changé l'état du goban. Alors ce sera au tour
							de Noir de trouver une menace, et ainsi de suite, tant qu'aucun des deux joueurs
							ne connecte.</p></td>
						</tr>
					</tbody>
				</table>

			<br/>
			<h2>9 Fin de la partie</h2>
			<br/>
				<p>La partie s'arrête lorsque les deux joueurs passent
				consécutivement. On compte alors les points. Chaque intersection du
				territoire d'un joueur lui rapporte un point, ainsi que chacune de ses pierres
				encore présentes sur le goban.
				<br>
				<br>
				Par ailleurs, commencer est un avantage pour Noir. Aussi, dans
				une partie à égalité, Blanc reçoit en échange
				des points de compensation, appellés komi.
				Le komi est habituellement de 7 points et demi (le demi-point
				sert à éviter les parties nulles).
				<br>
				<br>
				Le gagnant est celui qui a le plus de points.</p>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompte1.gif"></td>
							<td><p>Diag.12: A ce stade, tous les territoires sont fermés, et aucune
							de leurs frontières ne peut être capturée par l'adversaire.
							C'est le moment de passer et de compter les points.</p>

							<ul>
								<li>Noir a 8 points de territoire en bas à
								gauche et 2 en haut à droite. Il a de plus 33 pierres sur le jeu. Son
								total est de 43 points.</li>

								<li>Blanc a 2 points de territoire en haut à
								gauche et 9 en bas à droite. Il a de plus 27 pierres sur le jeu. Son total
								est de 38 points.</li>

								<li>Noir a donc 5 points de plus
								que Blanc sur le jeu. Mais si l'on tient compte du komi, Blanc gagne de 2 points et demi>.</li>
							</ul>
							</td>
						</tr>
					</tbody>
				</table>

				<p>En pratique, afin de raccourcir les parties sans en changer le score, les joueurs
				pourront, d'un commun accord, retirer du goban les pierres
				mortes adverses juste avant le décompte des points, sans avoir à
				rajouter les coups nécessaires à leur capture. En cas de
				désaccord (ce qui est en principe exceptionnel), il suffira de continuer
				à jouer jusqu'à ce que tous les litiges éventuels soient
				réglés.</p>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompte2.gif"></td>
							<td><p>Diag.13: Si Noir joue en 'a', il capture les pierres blanches 'X'. Si
							Blanc essaie de les sauver en jouant lui-même en 'a', Noir joue en 'b' et
							les capture quand même. Comme par ailleurs, tous les territoires sont
							fermés, les deux joueurs passent. Puis Noir retire les pierres 'X' du jeu,
							et on peut compter les points. Vérifiez que Noir
							gagne d'un point et demi.</p></td>
						</tr>
					</tbody>
				</table>

				<p>Note importante: en pratique, on peut utiliser
				une méthode de décompte rapide qui évite
				d'avoir à déterminer le nombre des pierres qui sont sur le jeu.
				Cette méthode est décrite plus loin dans ce document.</p>

			<br/>
			<h2>10 Partie à handicap</h2>
			<br/>
				<p>Parfois, on donne un handicap à l'un des
				joueurs, consistant à laisser l'autre, qui prend Noir, jouer plusieurs
				coups de suite au début de la partie. Dans ce cas, Blanc reçoit un
				demi-point (toujours pour éviter les parties nulles), et un nombre de
				points supplémentaires égal au nombre de coups qu'il n'a pas pu
				jouer en début de partie.</p>

				<div class="figure"><img src="Images/handicap.gif">
				<p>Voici le début d'une partie à
				9 pierres de handicap. Noir commence par poser 9 pierres sur le jeu. Ce n'est
				qu'ensuite que Blanc pose sa première pierre (le coup 1 dans cet exemple).
				Traditionnellement, Noir place les pierres de handicap sur les hoshis.</p>
				</div>

			<br/>
			<h2>11 Méthode de décompte rapide</h2>
			<br/>
				<p>Pour déterminer le score sans avoir à compter les pierres de
				chaque couleur présentes sur le goban, on
				pourra:</p>

				<ul>
					<li>durant la partie, conserver les pierres que l'on a
					capturées, et donner à chaque fois que l'on passe une pierre
					à l'adversaire comme si elle avait été
					capturée,</li>

					<li>à la fin de la partie, si Noir a joué le
					dernier, imposer à Blanc de lui donner une pierre de plus,</li>

					<li>juste avant le décompte des points, placer les
					pierres adverses que l'on détient dans les territoires de l'autre.</li>
				</ul>

				<p>Ainsi, à la fin, dans une partie à égalité, chacun
				aura utilisé le même nombre de pierres, qui seront toutes sur le goban: il sera donc inutile de les compter.</p>

				<p>Dans une partie à n handicaps, le total des pierres noires sur le goban sera égal au total des pierres blanches plus les
				n-1 points supplémentaires. Là encore, il sera donc inutile de
				compter les pierres.</p>

				<p>Dans les deux cas, le vainqueur sera celui qui possèdera le plus
				d'intersections inoccupées, sans oublier, dans les parties à
				égalité, d'ajouter le komi au total de Blanc,
				et dans les parties à handicap, d'ajouter un demi point au total du
				même Blanc.</p>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompteRapide1.gif"></td>
							<td><p>Diag.14: Cette partie à égalité vient juste de se
							terminer, et c'est Noir qui a posé le dernier coup. Durant la partie, Noir
							a capturé 5 pierres blanches, et Blanc a capturé 2 pierres noires.
							Les pierres 'X' sont retirées du jeu car elles sont sures de se faire
							capturer tôt ou tard.</p></td>
						</tr>
					</tbody>
				</table>
				<br>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompteRapide2.gif"></td>
							<td><p>Diag.15: Première méthode de décompte pour une
							partie à égalité</p>

							<p>On compte les intersections inoccupées et les pierres qui sont sur le jeu,
							sans se préoccuper des pierres capturées.</p>

							<ul>
								<li>Noir a 23 intersections dans son territoire et
								24 pierres sur le jeu.</li>

								<li>Blanc a 14 intersections dans son territoire et 20
								pierres sur le jeu. Blanc reçoit de plus un komi de 7
								points et demi.</li>

								<li>Noir gagne de (23+24)-(14+20+7,5), soit 5 points et
								demi.</li>
							</ul>
							</td>
						</tr>
					</tbody>
				</table>
				<br>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompteRapide3.gif"></td>
							<td><p>Diag.16: Deuxième méthode de décompte pour une
							partie à égalité</p>

							<p>Chacun place les pierres adverses qu'il a en sa possession dans le territoire de
							l'autre (les pierres 'X'). Noir a 9 pierres blanches à placer (5 pierres
							capturées pendant la partie, 2 pierres retirées du jeu après
							les deux passes marquant la fin de la partie, 1 pierre que Blanc lui donne car
							c'est Noir qui a joué le dernier, et 1 pierre pour le passe de Blanc).
							Blanc en a 5 (2 pierres capturées pendant la partie, 2 pierres
							retirées du jeu après les deux passes marquant la fin de la partie,
							et 1 pierre pour le passe de Noir).</p>

							<p>On ne compte que les intersections inoccupées restantes, sans se
							préoccuper de savoir combien il y a de pierres sur le jeu.</p>

							<ul>
								<li>Noir a 18 intersections dans son territoire, et
								Blanc 5.</li>

								<li>On ajoute le komi de 7 points et
								demi à Blanc.</li>

								<li>Noir gagne de (18-(5+7,5)), soit toujours 5 points et
								demi.</li>
							</ul>
							</td>
						</tr>
					</tbody>
				</table>
				<br>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompteRapide4.gif"></td><td><p>Diag.
							17: Cette partie, qui était à 3 pierres de handicap,
							vient juste de se terminer. C'est Blanc qui a joué le dernier coup.
							Pendant la partie, Blanc a capturé 5 pierres. Noir n'a capturé
							aucune pierre blanche. Après les deux passes marquant la fin de la partie,
							Blanc retire les 2 pierres noires 'X' du jeu car il est sûr de pouvoir les
							capturer. On peut alors compter les points. </p></td>
						</tr>
					</tbody>
				</table>
				<br>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompteRapide5.gif"></td><td><p>Diag.
							18: Première méthode de décompte pour une
							partie à handicap</p>

							<p>On compte les intersections inoccupées et les pierres qui sont sur le jeu,
							sans se préoccuper des pierres capturées.</p>

							<ul>
								<li>Noir a 28 intersections inoccupées dans
								son territoire et 16 pierres sur le jeu.</li>

								<li>Blanc a 16 intersections inoccupées dans son
								territoire et 21 pierres sur le jeu. Blanc reçoit 2 points
								supplémentaires car c'est une partie à 3 pierres de handicap, et un
								demi point pour éviter les parties nulles.</li>

								<li>Noir gagne de (28+16)-(16+21+2,5), soit 4 points et
								demi.</li>
							</ul>
							</td>
						</tr>
					</tbody>
				</table>
				<br>

				<table>
					<tbody>
						<tr>
							<td><img src="Images/decompteRapide6.gif"></td><td><p>Diag.
							19: Deuxième méthode de décompte pour une
							partie à handicap</p>

							<p>Chacun place les pierres adverses qu'il a en sa possession dans le territoire de
							l'autre (les pierres 'X'). Noir a 1 pierre blanche à placer (celle qui
							correspond au passe de Blanc à la fin de la partie). Blanc en a 8 (5
							pierres capturées en cours de partie, 2 pierres retirées du jeu
							après les deux passes marquant la fin de la partie, et 1 pierre pour un
							passe de Noir).</p>

							<p>Ensuite, on ne compte que les intersections inoccupées restantes, sans se
							préoccuper de savoir combien il y avait de pierres de handicap, ni combien
							il reste de pierres sur le jeu.</p>

							<ul>
								<li>Noir a 20 intersections inoccupées dans
								son territoire, et Blanc 15.</li>

								<li>On n'ajoute qu'un demi point à Blanc pour
								éviter les parties nulles.</li>

								<li>Noir gagne de (20-15,5), soit toujours 4 points et
								demi.</li>

							</ul>
							</td>
						</tr>
					</tbody>
				</table>

		</div>
    </div>
    <div id="pied">
    	<?php include("pied.php"); ?>
        <?php
        // Connexion à la base de données
        ?>
        
    </div>
</body> 
</html> 