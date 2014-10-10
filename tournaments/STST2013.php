<?php 
    session_start();
	$page ='location:../tournaments/STST2013';
	$_SESSION['page'] = $page;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Summer Teams Squash Tournament | Holmer Green Squash & Racketball Club</title>
	<link rel="stylesheet" href="../stylesheet/hgsrc.css"/>
    <!--[if lte IE 7]>
	<link rel="stylesheet" href="../stylesheet/hgsrcIE7.css" type="text/css" />
	<![endif]-->
	<link rel="shortcut icon" href="../image/favicon.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="index, nofollow"/>
	<meta name="author" content="Holmer Green Squash & Racketball Club"/>
	<meta name="Description" content="Tournament"/>
</head>
<body>

<div id="container">
    <div id="main">
        <?php include("../includes/header.php") ?>
        <div id="box-fullwidth" style="text-align:center;">
            <div id="heading-fullwidth"><a class="arial16white"><b>Summer Teams Squash Tournament 2013</b></a></div>  
            <?php
                if($_SESSION['loggedin'] == "true")
                {

                    echo('
            <div id="Tables" style="position:relative; float:left; width:600px; height:auto; text-align:center; line-height:16px; padding:20px;">
						<table class="STST" style="width:600px">
						<tr><th colspan="11" style="height:20px; font-size:14px; background-color:#9f5f3f">Buzzards</th></tr>
						<tr><th style="background-color:#9f5f3f">Played 8 matches</th>
						<th colspan="2" style="background-color:#1fbfbf">Eagles</th><th colspan="2" style="background-color:#ff7f00">Falcons</th><th colspan="2" style="background-color:#ffbf00">Harriers</th><th colspan="2" style="background-color:#ffff00">Hawks</th>
						<th style="background-color:#9f5f3f">Total</th>
						<th style="background-color:#9f5f3f">Average</th>
						</tr>
						
							<tr>
							<td>Mark Mellett</td>
							 <td>54</td> <td style="background-color:#efefef; color:#52aa6c;"><b>38</b></td> <td>53</td> <td>42</td> <td style="background-color:#efefef; color:#bb0000;"><b>46</b></td> <td>49</td> <td>53</td> <td>59</td>
							<td>394</td>
							<td>49</td>
							</tr>
							
							<tr>
							<td>Roland Levan</td>
							 <td style="background-color:#efefef; color:#52aa6c;"><b>51</b></td> <td>37</td> <td>47</td> <td>37</td> <td>42</td> <td>45</td> <td>41</td> <td>32</td>
							<td>332</td>
							<td>42</td>
							</tr>
							
							<tr>
							<td>Robert Reid</td>
							 <td>54</td> <td>36</td> <td>41</td> <td style="background-color:#efefef; color:#52aa6c;"><b>39</b></td> <td>44</td> <td>41</td> <td>32</td> <td>32</td>
							<td>319</td>
							<td>40</td>
							</tr>
							
							<tr>
							<td>Neal Holland</td>
							 <td style="background-color:#efefef; color:#52aa6c;"><b>38</b></td> <td>40</td> <td>40</td> <td>35</td> <td>42</td> <td>49</td> <td>43</td> <td style="background-color:#efefef; color:#52aa6c;"><b>45</b></td>
							<td>332</td>
							<td>42</td>
							</tr>
							
							<tr>
							<td>James Holland</td>
							 <td>68</td> <td>69</td> <td>59</td> <td>61</td> <td>56</td> <td>64</td> <td style="background-color:#efefef; color:#52aa6c;"><b>65</b></td> <td>41</td>
							<td>483</td>
							<td>60</td>
							</tr>
							
						<tr>
						<td><b>Total</b></td>
						<td><b>265</b></td><td><b>220</b></td><td><b>240</b></td><td><b>214</b></td><td><b>230</b></td><td><b>248</b></td><td><b>234</b></td><td><b>209</b></td>
						<td><b>1860</b></td>
						<td><b>233</b></td>
						</tr>
						</table>
						
						<table class="STST" style="width:600px">
						<tr><th colspan="11" style="height:20px; font-size:14px; background-color:#1fbfbf">Eagles</th></tr>
						<tr><th style="background-color:#1fbfbf">Played 8 matches</th>
						<th colspan="2" style="background-color:#9f5f3f">Buzzards</th><th colspan="2" style="background-color:#ff7f00">Falcons</th><th colspan="2" style="background-color:#ffbf00">Harriers</th><th colspan="2" style="background-color:#ffff00">Hawks</th>
						<th style="background-color:#1fbfbf">Total</th>
						<th style="background-color:#1fbfbf">Average</th>
						</tr>
						
							<tr>
							<td>David Albin</td>
							 <td>29</td> <td>36</td> <td>44</td> <td>44</td> <td style="background-color:#efefef; color:#52aa6c;"><b>37</b></td> <td>43</td> <td>57</td> <td>55</td>
							<td>345</td>
							<td>43</td>
							</tr>
							
							<tr>
							<td>Robert Bagley</td>
							 <td>37</td> <td>37</td> <td>45</td> <td>46</td> <td style="background-color:#efefef; color:#52aa6c;"><b>50</b></td> <td style="background-color:#efefef; color:#52aa6c;"><b>32</b></td> <td>28</td> <td>26</td>
							<td>301</td>
							<td>38</td>
							</tr>
							
							<tr>
							<td>Martin Stone</td>
							 <td>39</td> <td style="background-color:#efefef; color:#52aa6c;"><b>56</b></td> <td>41</td> <td>34</td> <td>53</td> <td>39</td> <td style="background-color:#efefef; color:#52aa6c;"><b>43</b></td> <td>24</td>
							<td>329</td>
							<td>41</td>
							</tr>
							
							<tr>
							<td>Luke Jackson</td>
							 <td>44</td> <td>67</td> <td>46</td> <td style="background-color:#efefef; color:#bb0000;"><b>43</b></td> <td>42</td> <td>57</td> <td>42</td> <td>54</td>
							<td>395</td>
							<td>49</td>
							</tr>
							
							<tr>
							<td>Rachel Albin</td>
							 <td>41</td> <td style="background-color:#efefef; color:#52aa6c;"><b>47</b></td> <td>46</td> <td>46</td> <td>50</td> <td>54</td> <td>54</td> <td style="background-color:#efefef; color:#52aa6c;"><b>61</b></td>
							<td>399</td>
							<td>50</td>
							</tr>
							
						<tr>
						<td><b>Total</b></td>
						<td><b>190</b></td><td><b>243</b></td><td><b>222</b></td><td><b>213</b></td><td><b>232</b></td><td><b>225</b></td><td><b>224</b></td><td><b>220</b></td>
						<td><b>1769</b></td>
						<td><b>221</b></td>
						</tr>
						</table>
						
						<table class="STST" style="width:600px">
						<tr><th colspan="11" style="height:20px; font-size:14px; background-color:#ff7f00">Falcons</th></tr>
						<tr><th style="background-color:#ff7f00">Played 8 matches</th>
						<th colspan="2" style="background-color:#9f5f3f">Buzzards</th><th colspan="2" style="background-color:#1fbfbf">Eagles</th><th colspan="2" style="background-color:#ffbf00">Harriers</th><th colspan="2" style="background-color:#ffff00">Hawks</th>
						<th style="background-color:#ff7f00">Total</th>
						<th style="background-color:#ff7f00">Average</th>
						</tr>
						
							<tr>
							<td>Chris Walters</td>
							 <td>36</td> <td>35</td> <td>44</td> <td>46</td> <td style="background-color:#efefef; color:#bb0000;"><b>43</b></td> <td>42</td> <td>59</td> <td>68/td>
							<td>373</td>
							<td>47</td>
							</tr>
							
							<tr>
							<td>Rudy Ike</td>
							 <td style="background-color:#efefef; color:#52aa6c;"><b>56</b></td> <td style="background-color:#efefef; color:#52aa6c;"><b>77</b></td> <td>41</td> <td>47</td> <td>37</td> <td>41</td> <td>32</td> <td>39</td>
							<td>370</td>
							<td>46</td>
							</tr>
							
							<tr>
							<td>Peter Dowling</td>
							 <td>36</td> <td>50</td> <td>55</td> <td style="background-color:#efefef; color:#52aa6c;"><b>46</b></td> <td>53</td> <td>47</td> <td style="background-color:#efefef; color:#52aa6c;"><b>42</b></td> <td style="background-color:#efefef; color:#52aa6c;"><b>37</b></td>
							<td>366</td>
							<td>46</td>
							</tr>
							
							<tr>
							<td>Haani Hawa</td>
							 <td>41</td> <td style="background-color:#efefef; color:#52aa6c;"><b>57</b></td> <td>37</td> <td style="background-color:#efefef; color:#bb0000;"><b>46</b></td> <td>46</td> <td>42</td> <td>35</td> <td>47</td>
							<td>351</td>
							<td>44</td>
							</tr>
							
							<tr>
							<td>Jasper Kettle</td>
							 <td>58</td> <td style="background-color:#efefef; color:#52aa6c;"><b>54</b></td> <td>66</td> <td>43</td> <td>36</td> <td>76</td> <td>64</td> <td>65</td>
							<td>462</td>
							<td>58</td>
							</tr>
							
						<tr>
						<td><b>Total</b></td>
						<td><b>227</b></td><td><b>273</b></td><td><b>243</b></td><td><b>228</b></td><td><b>215</b></td><td><b>248</b></td><td><b>232</b></td><td><b>256</b></td>
						<td><b>1922</b></td>
						<td><b>240</b></td>
						</tr>
						</table>
						
						<table class="STST" style="width:600px">
						<tr><th colspan="11" style="height:20px; font-size:14px; background-color:#ffbf00">Harriers</th></tr>
						<tr><th style="background-color:#ffbf00">Played 8 matches</th>
						<th colspan="2" style="background-color:#9f5f3f">Buzzards</th><th colspan="2" style="background-color:#1fbfbf">Eagles</th><th colspan="2" style="background-color:#ff7f00">Falcons</th><th colspan="2" style="background-color:#ffff00">Hawks</th>
						<th style="background-color:#ffbf00">Total</th>
						<th style="background-color:#ffbf00">Average</th>
						</tr>
						
							<tr>
							<td>Keith Fisher</td>
							 <td style="background-color:#efefef; color:#bb0000;"><b>44</b></td> <td>23</td> <td>40</td> <td>38</td> <td style="background-color:#efefef; color:#bb0000;"><b>46</b></td> <td>43</td> <td>45</td> <td>60</td>
							<td>339</td>
							<td>42</td>
							</tr>
							
							<tr>
							<td>Mark Beeks</td>
							 <td>47</td> <td>38</td> <td>49</td> <td>50</td> <td>42</td> <td>54</td> <td>40</td> <td>38</td>
							<td>358</td>
							<td>45</td>
							</tr>
							
							<tr>
							<td>Drew Wotherspoon</td>
							 <td>35</td> <td>39</td> <td style="background-color:#efefef; color:#52aa6c;"><b>63</b></td> <td style="background-color:#efefef; color:#52aa6c;"><b>52</b></td> <td>37</td> <td>42</td> <td>27</td> <td style="background-color:#efefef; color:#bb0000;"><b>46</b></td>
							<td>341</td>
							<td>43</td>
							</tr>
							
							<tr>
							<td>Peter Cawley</td>
							 <td>41</td> <td>36</td> <td>27</td> <td>37</td> <td>44</td> <td>42</td> <td>37</td> <td>35</td>
							<td>299</td>
							<td>37</td>
							</tr>
							
							<tr>
							<td>Rebecca Meyrick</td>
							 <td>52</td> <td>38</td> <td>66</td> <td>49</td> <td>60</td> <td>47</td> <td>48</td> <td>51</td>
							<td>411</td>
							<td>51</td>
							</tr>
							
						<tr>
						<td><b>Total</b></td>
						<td><b>219</b></td><td><b>174</b></td><td><b>245</b></td><td><b>226</b></td><td><b>229</b></td><td><b>228</b></td><td><b>197</b></td><td><b>230</b></td>
						<td><b>1748</b></td>
						<td><b>219</b></td>
						</tr>
						</table>
						
						<table class="STST" style="width:600px">
						<tr><th colspan="11" style="height:20px; font-size:14px; background-color:#ffff00">Hawks</th></tr>
						<tr><th style="background-color:#ffff00">Played 8 matches</th>
						<th colspan="2" style="background-color:#9f5f3f">Buzzards</th><th colspan="2" style="background-color:#1fbfbf">Eagles</th><th colspan="2" style="background-color:#ff7f00">Falcons</th><th colspan="2" style="background-color:#ffbf00">Harriers</th>
						<th style="background-color:#ffff00">Total</th>
						<th style="background-color:#ffff00">Average</th>
						</tr>
						
							<tr>
							<td>Ben Raftery</td>
							 <td>28</td> <td>25</td> <td>30</td> <td>32</td> <td>32</td> <td>28</td> <td>34</td> <td>23</td>
							<td>232</td>
							<td>29</td>
							</tr>
							
							<tr>
							<td>Steve Wetherall</td>
							 <td>38</td> <td>63</td> <td style="background-color:#efefef; color:#52aa6c;"><b>53</b></td> <td>59</td> <td>48</td> <td>51</td> <td style="background-color:#efefef; color:#52aa6c;"><b>50</b></td> <td>38</td>
							<td>400</td>
							<td>50</td>
							</tr>
							
							<tr>
							<td>Charlie Kenyon</td>
							 <td>45</td> <td>45</td> <td>68</td> <td style="background-color:#efefef; color:#52aa6c;"><b>82</b></td> <td>35</td> <td>63</td> <td>61</td> <td style="background-color:#efefef; color:#bb0000;"><b>44</b></td>
							<td>443</td>
							<td>55</td>
							</tr>
							
							<tr>
							<td>Nicholas McIntyre</td>
							 <td>48</td> <td>60</td> <td>71</td> <td>47</td> <td>53</td> <td>48</td> <td>53</td> <td>58</td>
							<td>438</td>
							<td>55</td>
							</tr>
							
							<tr>
							<td>Conor Taylor</td>
							 <td>63</td> <td>54</td> <td>63</td> <td>60</td> <td>61</td> <td>52</td> <td>54</td> <td>57</td>
							<td>464</td>
							<td>58</td>
							</tr>
							
						<tr>
						<td><b>Total</b></td>
						<td><b>222</b></td><td><b>247</b></td><td><b>285</b></td><td><b>280</b></td><td><b>229</b></td><td><b>242</b></td><td><b>252</b></td><td><b>220</b></td>
						<td><b>1977</b></td>
						<td><b>247</b></td>
						</tr>
						</table>
						</div>

					<div id="Standings" style="position:relative; float:left; width:300px; height:auto; text-align:center; line-height:16px; padding: 20px 20px 0 0;">
						<table class="STST" style="width:320px;">
						<tr><th colspan="4" style="height:20px; font-size:14px;">Standings</th></tr>
						<tr>
						<th style="height:20px;">Pos</th>
						<th style="height:20px;">Team</th>
						<th style="height:20px;">Played</th>
						<th style="height:20px;">Score</th>
						</tr>
					
					<tr>
					<th style="height:20px;">1</th>
					<th style="height:20px; background-color:#ffff00">Hawks</th>
					<th style="height:20px;">8</th>
					<th style="height:20px;">1977</th>
					</tr>
					
					<tr>
					<th style="height:20px;">2</th>
					<th style="height:20px; background-color:#ff7f00">Falcons</th>
					<th style="height:20px;">8</th>
					<th style="height:20px;">1922</th>
					</tr>
					
					<tr>
					<th style="height:20px;">3</th>
					<th style="height:20px; background-color:#9f5f3f">Buzzards</th>
					<th style="height:20px;">8</th>
					<th style="height:20px;">1860</th>
					</tr>
					
					<tr>
					<th style="height:20px;">4</th>
					<th style="height:20px; background-color:#1fbfbf">Eagles</th>
					<th style="height:20px;">8</th>
					<th style="height:20px;">1769</th>
					</tr>
					
					<tr>
					<th style="height:20px;">5</th>
					<th style="height:20px; background-color:#ffbf00">Harriers</th>
					<th style="height:20px;">8</th>
					<th style="height:20px;">1748</th>
					</tr>
					
					</table>
					</div>
					
					<div id="Fixtures" style="position:relative; float:left; width:300px; height:auto; text-align:center; line-height:16px; padding: 0 20px 20px 0;">
					
					<table class="STST" style="width:320px;">
					<tr><th colspan="4" style="height:20px; font-size:14px;">Fixtures</th></tr>
					<tr>
					<th>Date</th>
					<th>Team 1</th>
					<th>Team 2</th>
					<th>Court</th>
					</tr>
					
        <tr>
        <th>Tue 7 May</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Wed 8 May</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 14 May</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Wed 15 May</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 21 May</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 21 May</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>3</th>
        </tr>
        
        <tr>
        <th>Wed 22 May</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 4 June</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 4 June</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>3</th>
        </tr>
        
        <tr>
        <th>Wed 5 June</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 11 June</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Wed 12 June</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 18 June</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Wed 19 June</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 25 June</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 25 June</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>3</th>
        </tr>
        
        <tr>
        <th>Wed 26 June</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 2 July</th>
        <th style="background-color:#ffbf00">Harriers</th>
        <th style="background-color:#ff7f00">Falcons</th>
        <th>2</th>
        </tr>
        
        <tr>
        <th>Tue 2 July</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th style="background-color:#ffff00">Hawks</th>
        <th>3</th>
        </tr>
        
        <tr>
        <th>Wed 3 July</th>
        <th style="background-color:#9f5f3f">Buzzards</th>
        <th style="background-color:#1fbfbf">Eagles</th>
        <th>2</th>
        </tr>
        </table> </div>
			
			<div id="Reserves" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding: 0 20px 20px 20px;">
            
						<table class="STST" style="width:940px">
						<tr>
						<th colspan="20" style="height:20px; font-size:14px; background-color:#52aa6c; color:#ffffff;">RESERVES</th></tr>
						<tr><th>Name</th>
						<th>Rank</th>
						<th colspan="15">Scores</th>
						<th>Played</th>
						<th>Total</th>
						<th>Average</th>
						</tr>
						
						<tr>
						<td>Phil Beukes</td>
						<td>1</td>
						 <td style="background-color:#9f5f3f; color:#000000; font-weight:bold;">38</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>1</td>
						<td>38</td>
						<td>38</td>
						</tr>
						
						<tr>
						<td>Matt Bone</td>
						<td>1</td>
						 <td style="background-color:#1fbfbf; color:#000000; font-weight:bold;">37</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>1</td>
						<td>37</td>
						<td>37</td>
						</tr>
						
						<tr>
						<td>John Richards</td>
						<td>2</td>
						 <td style="background-color:#ff7f00; color:#000000; font-weight:bold;">56</td> <td style="background-color:#1fbfbf; color:#000000; font-weight:bold;">50</td> <td style="background-color:#ffff00; color:#000000; font-weight:bold;">53</td> <td style="background-color:#ff7f00; color:#000000; font-weight:bold;">77</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>4</td>
						<td>236</td>
						<td>59</td>
						</tr>
						
						<tr>
						<td>Mark Turnbull</td>
						<td>3</td>
						 <td style="background-color:#ff7f00; color:#000000; font-weight:bold;">46</td> <td style="background-color:#ffff00; color:#000000; font-weight:bold;">82</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>2</td>
						<td>128</td>
						<td>64</td>
						</tr>
						
						<tr>
						<td>Jeff Watson</td>
						<td>3</td>
						 <td style="background-color:#ffbf00; color:#000000; font-weight:bold;">63</td> <td style="background-color:#ff7f00; color:#000000; font-weight:bold;">42</td> <td style="background-color:#1fbfbf; color:#000000; font-weight:bold;">56</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>3</td>
						<td>161</td>
						<td>54</td>
						</tr>
						
						<tr>
						<td>Mark Soper</td>
						<td>3</td>
						 <td style="background-color:#9f5f3f; color:#000000; font-weight:bold;">39</td> <td style="background-color:#ff7f00; color:#000000; font-weight:bold;">37</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>2</td>
						<td>76</td>
						<td>38</td>
						</tr>
						
						<tr>
						<td>Helen Ike</td>
						<td>4</td>
						 <td style="background-color:#1fbfbf; color:#000000; font-weight:bold;">43</td> <td style="background-color:#9f5f3f; color:#000000; font-weight:bold;">45</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>2</td>
						<td>88</td>
						<td>44</td>
						</tr>
						
						<tr>
						<td>Alex O\'Regan</td>
						<td>5</td>
						 <td style="background-color:#9f5f3f; color:#000000; font-weight:bold;">65</td> <td style="background-color:#1fbfbf; color:#000000; font-weight:bold;">61</td> <td style="background-color:#1fbfbf; color:#000000; font-weight:bold;">47</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>3</td>
						<td>173</td>
						<td>58</td>
						</tr>
						
						<tr>
						<td>Andy Carr</td>
						<td>4</td>
						 <td style="background-color:#9f5f3f; color:#000000; font-weight:bold;">38</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td> <td style="background-color:#ffffff; color:#333333; font-weight:normal;">0</td>
						<td>1</td>
						<td>38</td>
						<td>38</td>
						</tr>
						
				</table>
				</div>
				            ');

                }
                else 
                {
                echo('
                <div id="Div1" style="position:relative; float:left; width:940px; height:auto; text-align:center; line-height:16px; padding:20px;">
                <a class="arial14grey">Log in to view the Tournament information.</a>
                </div>
                ');
                }
                ?>
            </div>
        </div>            
    

            <?php include("../includes/footer.php") ?>

        </div>
</div>
</body>
</html>