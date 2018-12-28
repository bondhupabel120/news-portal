-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 03:17 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NewsPortal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_ones`
--

CREATE TABLE `blog_ones` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_one_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_one_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_one_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_one_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_ones`
--

INSERT INTO `blog_ones` (`id`, `category_id`, `blog_one_title`, `blog_one_short_description`, `blog_one_long_description`, `blog_one_image`, `publication_status`, `hit_count`, `created_at`, `updated_at`) VALUES
(12, 11, 'Kaneria admits guilt in Westfield spot-fixing case', 'Former Pakistan leg-spinner Danish Kaneria has admitted his role in a spot-fixing case involving former Essex team mate Mervyn Westfield on Thursday...', '<p>Westfield was jailed for four months after pleading guilty to accepting a payment to concede a set number of runs off an over in a 40-overs English county match against Durham in 2009.</p>\r\n\r\n<p>Kaneria, who had repeatedly denied any involvement in trying to engineer particular situations in a game, was banned for life by the ECB in June 2012 for &quot;cajoling and pressurising&quot; Westfield into accepting money.</p>\r\n\r\n<p>&quot;My name is Danish Kaneria and I admit that I was guilty of the two charges brought against me by the England and Wales Cricket Board in 2012,&quot; the 37-year-old told Al Jazeera.</p>\r\n\r\n<p>&quot;I have become strong enough to make this decision, because you cannot live a life with lies.&quot;</p>\r\n\r\n<p>Kaneria remains Pakistan&#39;s most successful spinner with 261 wickets in 61 tests.</p>\r\n\r\n<p>He last played for Pakistan against England at Trent Bridge Test in 2010, and has not appeared in any first-class game since March 2012.</p>\r\n\r\n<p>&quot;I want to apologise to Mervyn Westfield, my Essex team-mates, my Essex cricket club, my Essex cricket fans. I say sorry to Pakistan,&quot; Kaneria added.</p>\r\n\r\n<p>&quot;If the ECB and ICC (The International Cricket Council) and other bodies would give me a second chance I can help to educate young people in cricket, teach them that if you do wrong you are finished like me.&quot;</p>', 'blog-images/Kaneria.JPG', 1, 69, '2018-10-20 23:21:02', '2018-11-04 12:23:43'),
(14, 21, 'Sreepur Sramik League leader hacked to death', 'The grisly incident took place around 9am on Thursday at the Upazila’s Pashchim Khanda Mosque intersection, according to police.', '<p>The grisly incident took place around 9am on Thursday at the Upazila&rsquo;s Pashchim Khanda Mosque intersection, according to police.</p>\r\n\r\n<p>The dead has been identified as Omar Faruk, 27, son of Hafizul Islam and brother of Sreepur Upazila Chhatra League General Secretary Rakibul Hasan. Faruk was the organising secretary of Sreepur Sramik League. He was the resident Sreepur Upazila&rsquo;s Kewa Paschim Khanda village.</p>\r\n\r\n<p>&ldquo;A group of people picked up Faruk in a car while he was on an autorickshaw at Pashchim Khanda Mosque intersection. Later, his hands were severed and he was dragged out of the vehicle in front of Kewa Pashchim Khanda Government Primary School,&rdquo; said Ashrafullah, sub-inspector of Sreepur Police Station.&nbsp;</p>\r\n\r\n<p>Locals rescued him and took him to the local Al-Hera Hospital. He was later shifted to Sreepur Upazila Health Complex where doctors declared him dead.</p>\r\n\r\n<p>Shamsunnahar, superintendent of police in Gazipur, visited the hospital and promised to bring the killers to justice.</p>\r\n\r\n<p>In protest against the murder of Faruk, the Sramik League instantly took out a procession in the city&#39;s Sreepur municipality around 11am.</p>', 'blog-images/Gazipur-AL-Leader.jpg', 1, 14, '2018-10-25 02:37:36', '2018-11-03 14:12:48'),
(15, 20, 'Why you can’t stop looking at other people’s screens', 'Other people’s screens are windows into their lives, and brains, and relationships and work — into their politics, anxieties,', '<p>Other people&rsquo;s screens are everywhere, once you start to notice them. They&rsquo;re collectively most obvious at night, as they bob through the city, creating a new, hand-height layer to the ambient lights, or when held up at concerts, like lighters. During the day, other people&rsquo;s screens hover around us as we wait in line for coffee, or as we sit and drink our coffee, or as we take our coffee on the bus or train.</p>\r\n\r\n<p>Other people&rsquo;s screens are windows into their lives, and brains, and relationships and work &mdash; into their politics, anxieties, failures and addictions. They tend to appear between 1 and 3 feet away from other people&rsquo;s faces, depending.</p>\r\n\r\n<p>Other people&rsquo;s screens are also a lot smaller than they used to be, when they were perched almost exclusively on desks and tables at offices and in homes, where the presence of strangers is rare or worrying by default. In 2010, 27 percent of American people carried portable screens; by the end of 2016, it was more than 80 percent. Over the same period, the largest iPhone screen grew from 3.5 inches, from one corner to the other, to 5.5. Other people&rsquo;s screens got clearer and brighter, from a wider range of angles: flat on a desk; held low, for a glance during dinner; held out for a group to see; and of course, spied over a shoulder, on the way to work.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"A subway rider uses a smartphone in New York, Oct 5 2018. The New York Times\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/11/screen-spying-08.jpg/ALTERNATES/w300/screen-spying-08.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>A subway rider uses a smartphone in New York, Oct 5 2018. The New York Times</p>\r\n\r\n<p><img alt=\"A subway rider uses a smartphone in New York, Oct 5 2018. The New York Times\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/11/screen-spying-09.jpg/ALTERNATES/w300/screen-spying-09.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>A subway rider uses a smartphone in New York, Oct 5 2018. The New York Times</p>\r\n\r\n<p>Other people&rsquo;s screens have changed the phenomenon of &ldquo;shoulder surfing&rdquo; &mdash; peeking over shoulders, often with malicious intent &mdash; or so a team of researchers at the Ludwig Maximilian University of Munich surmised. Shoulder surfing is why your passwords show up as dots or asterisks when you type them out on your computer or your phone. But most of the literature on it is security-focused, a response, perhaps, to questions of how best to safeguard one&rsquo;s information, during a time before portable screens. (See: &ldquo;Phoning Is an Art in the Age of Shoulder Surfers,&rdquo; a 1993 story in The New York Times, which described a dystopian Penn Station full of loitering thieves, all waiting for pay phone users to punch in or recite calling card numbers, which could be spied upon, stolen, and burned up in long-distance dialling sprees.)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In a world in which other people&rsquo;s screens are virtually impossible to ignore, there were &ldquo;no detailed investigations of shoulder surfing incidents and their real-world implications,&rdquo; wrote the researchers in Munich. So they distributed a survey, asking a range of questions about a hypothetical scenario in which a fictional character named &ldquo;Vic&rdquo; is looking at the mobile device of another fictional character named &ldquo;Cas,&rdquo; and Cas remains &ldquo;not aware&rdquo; of it.</p>\r\n\r\n<p>Vic and Cas, who, disarmingly, &ldquo;could both be you or anyone else&rdquo; are shown as stick figures to help participants respond to prompts like: &ldquo;Do you know of a **real** situation in which this happened?&rdquo; and &ldquo;What exactly could Vic see on the screen (text, pictures, passwords/PINs, maps, videos, apps, games, etc)?&rdquo;</p>', 'blog-images/screen-spying-07.jpg', 1, 41, '2018-10-25 02:39:30', '2018-11-04 12:23:38'),
(16, 17, 'Hasina says her rivals will be tackled ‘politically’ as election looms', 'The ruling party’s main rival the BNP, a member of the Dr Kamal Hossain-led alliance, alleges that the Hasina government', '<p>The ruling party&rsquo;s main rival the BNP, a member of the Dr Kamal Hossain-led alliance, alleges that the Hasina government oppresses dissent by using the administration.</p>\r\n\r\n<p>&ldquo;I never back off from tackling political rivals in any way. I tackle them politically,&rdquo; Hasina told parliament in response to criticism by the BNP, which has no representative in the House after boycotting the 2014 elections.</p>\r\n\r\n<p>The BNP raised a seven-point charter of demand at the Jatiya Oikya Front alliance&rsquo;s rally in Sylhet on Wednesday.</p>\r\n\r\n<p>The demands include release of the party&rsquo;s jailed chief Khaleda Zia and dissolution of parliament before holding the general elections with a non-partisan government in power.</p>\r\n\r\n<p>Gono Forum chief Dr Kamal urged all to get ready for a united movement to &ldquo;restore&rdquo; democracy at the rally.</p>\r\n\r\n<p>Welcoming the Front once again, Hasina hoped that different political parties would forge more alliances and contest in the elections.</p>\r\n\r\n<p>&ldquo;I believe this (all parties contesting elections) will strengthen the foundation of democracy,&rdquo; she said.</p>\r\n\r\n<p>Sagufta Yasmin, an MP from the ruling party, asked if the government had plans to take action against those who &ldquo;got united to hatch a conspiracy to destabilise the country&rdquo;.</p>\r\n\r\n<p>&ldquo;Some of those who have got together cannot even honour people while speaking. We can hear many things, including their misogynist mindset, offensive language towards women,&rdquo; Hasina said in reply, referring to the remarks by Mainul Hosein on TV.</p>\r\n\r\n<p>Mainul, a former adviser to the military-controlled caretaker government and the publisher and editorial board chief of The Daily New Nation, was sent to jail on Tuesday in a case started for &ldquo;defaming the women&rdquo; by calling a female journalist &ldquo;a woman with loose morals&rdquo;.</p>\r\n\r\n<p>&ldquo;If the aggrieved seek justice for indecent remarks made by someone, it is the state&rsquo;s duty to get him or her tried. The state is doing and will continue doing so,&rdquo; Hasina said.</p>\r\n\r\n<p>She also urged the people to give the Awami League another chance to serve the country by voting it back to power.</p>\r\n\r\n<p>In response to another question, the prime minister said the government was in discussion with the UK about the repatriation of BNP acting chief Tarique Rahman to ensure he serves jail terms given for corruption, money laundering and the deadly Aug 21, 2004 grenade attack targeting her.</p>\r\n\r\n<p>&ldquo;He must be punished,&rdquo; Hasina said.</p>', 'blog-images/PM-JS-01.jpg', 1, 58, '2018-10-25 02:41:49', '2018-11-03 14:26:28'),
(17, 13, 'A watery lake is detected on Mars, raising the potential for Alien life', 'Italian scientists working on the European Space Agency’s Mars Express mission announced on ....', '<p>Italian scientists working on the European Space Agency&rsquo;s Mars Express mission announced&nbsp;on Wednesday&nbsp;that a 12-mile wide underground liquid pool &mdash; not just the momentary damp spots seen in the past &mdash; had been detected by radar measurements near the <strong>Martian south pole</strong>.</p>\r\n\r\n<p>&ldquo;<em>Water is there,</em>&rdquo; Enrico Flamini, the former chief scientist of the Italian Space Agency who oversaw the research, said during a news conference.</p>\r\n\r\n<p>&ldquo;It is liquid, and it&rsquo;s salty, and it&rsquo;s in contact with rocks,&rdquo; he added. &ldquo;There are all the ingredients for thinking that life can be there, or can be maintained there if life once existed on Mars.&rdquo;</p>\r\n\r\n<p>The body of water appears similar to underground lakes found on Earth in Greenland and Antarctica. On Earth, microbial life persists down in the dark, frigid waters of one such lake. The ice on Mars would also shield the Martian lake from the damaging radiation that bombards the planet&rsquo;s surface.</p>\r\n\r\n<p>Jonathan Lunine, director of the Center for Astrophysics and Planetary Science at Cornell University, who was not involved with the research, said the finding transforms Mars from a dusty planet to yet another &ldquo;ocean world&rdquo; in the solar system.</p>\r\n\r\n<p>&ldquo;I think the more we explore Mars, the more intriguing and complex it becomes,&rdquo; Dr. Lunine said.</p>\r\n\r\n<p>For years, &ldquo;follow the water&rdquo; has been the mantra of NASA and indeed humanity&rsquo;s search for life somewhere else. Without water, there is no life as we know it. In recent years, that has led the space agency to contemplate robot probes to the moons of Jupiter and Saturn, like Europa or Enceladus, where it is now known that salty oceans exist underneath thin shells of ice and where imaginative astrobiologists can envision microbes or more complex creatures.</p>\r\n\r\n<p>Since humans could see through telescopes across space, Mars has been the favorite abode of imaginary life, the backyard just over the fence where the astronomer Percival Lowell imagined he could see canals and even cities webbing the orange globe. In the final evenings of this month, the planet looms like a red lantern in the East, just 35,784,871 miles from Earth &mdash; the closest it has been&nbsp;in 15 years.</p>\r\n\r\n<p>Those early science fiction visions were dashed when the first spacecraft photos of the planet revealed a dry, cratered and lifeless-looking surface &mdash; a seemingly dead planet. In the history of Mars exploration ever since, the more we learn, the more we think it could have had a watery, perhaps life-sustaining past. The surface is scored by old gorges, canyons, beaches, ocean basins and giant volcanoes, whose eruptions could have kept things riled up on the planet.&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Where this water went and how, taking most of Mars&rsquo;s atmosphere with it, is one of the great and ominous environmental mysteries of our time.</p>\r\n\r\n<p>If life did arise from those early, cozy conditions, it could have moved underground as the surface cooled and dried.</p>\r\n\r\n<p>And if Mars was once flush with liquid, was it also flush with life? If astronauts ever crunch across the red sands, will they also be crunching over fossils of microbes?</p>\r\n\r\n<p>The current findings, however, &ldquo;cannot say anything more,&rdquo; Dr. Flamini said. &ldquo;We may guess about what are the conditions and if the conditions are favorable.&rdquo;</p>\r\n\r\n<p>A view of the southern polar plain of Mars, with the Mars Express&rsquo;s color-coded findings superimposed at the site where they were detected. The 12-mile-wide lake is believed to be about a mile deep.CreditUSGS Astrogeology Science Center, Arizona State University, INAF</p>\r\n\r\n<p>Roberto Orosei, a co-investigator on the radar instrument and lead author of the paper published&nbsp;on Wednesday&nbsp;in the journal Science, said the scientists could not measure the thickness of the lake, but that it had to be at least a yard or so thick for the radar pulses to bounce back.</p>\r\n\r\n<p>He said a back-of-the-envelope calculation indicated several hundred million cubic meters of water. That&rsquo;s tens of billions of gallons.</p>\r\n\r\n<p>The Mars Advanced Radar for Subsurface and Ionosphere Sounding instrument, or Marsis, was developed and built by the Italians for the Mars Express mission, which entered orbit around Mars in 2003. Taking care not to damage the rest of the spacecraft, the team in charge of Marsis took two years to deploy the radar&rsquo;s 130-foot-long booms.</p>\r\n\r\n<p>Once the instrument was working, it sent back uncertain, inconsistent findings over this polar region. But the scientists figured out how to send back the raw data to <strong>Earth. </strong>It revealed bright reflections in a triangular region as the spacecraft passed multiple times. Intense pressure of the overlying ice would warm the ice. Computer models indicate that temperatures would be about minus-90 Fahrenheit &mdash; far colder than the melting point of water. That suggests that the water is brim full of salts, allowing it to melt.</p>', 'blog-images/mars.jpg', 1, 10, '2018-10-28 07:45:11', '2018-11-04 13:33:43'),
(19, 15, 'Movie studios join Disney-led service to link digital purchases', 'The Movies Anywhere service was developed by Walt Disney Co to provide a single app and website where customers ...', '<p>The Movies Anywhere service was developed by Walt Disney Co to provide a single app and website where customers can find movies they have purchased from a variety of retailers.</p>\r\n\r\n<p>Universal Pictures, Warner Bros, 20th Century Fox and Sony Pictures Entertainment have signed on to the effort, the statement said.</p>\r\n\r\n<p>Hollywood&rsquo;s movie studios are looking for ways to encourage digital sales of movies after they leave theatres in order to help make up for the decline in popularity of physical DVDs.</p>\r\n\r\n<p>The free Movies Anywhere service, launched in the United States on Wednesday, initially will allow users to access movies purchased from Apple&#39;s iTunes, Amazon Video, Google Play and Wal-Mart&#39;s Vudu. Other retailers and studios may join in the future.</p>', 'blog-images/pabel copy.jpg', 1, 18, '2018-10-28 07:50:48', '2018-11-04 16:30:19'),
(20, 16, 'Despite apology, Indonesia asks why US blocked military chief\'s travel', 'Armed forces commander General Gatot Nurmantyo was stopped on Saturday from boarding an Emirates ...', '<p>Armed forces commander General Gatot Nurmantyo was stopped on Saturday from boarding an Emirates flight to the United States, despite having a visa and an official invitation to a conference from his counterpart, the chairman of the US joint chiefs of staff, General Joseph Dunford.</p>\r\n\r\n<p>Foreign Minister Retno Marsudi said she had accepted an official apology from the deputy US ambassador in Jakarta but awaited a detailed explanation.</p>\r\n\r\n<p>&quot;We conveyed that we still await clarification, an explanation why this happened,&quot; Marsudi told reporters after meeting the US envoy.</p>\r\n\r\n<p>&quot;There is a sense of urgency to this that we have conveyed to them,&quot; she said, adding that US officials were &quot;trying to coordinate with relevant authorities in the US to find out what really happened.&quot;</p>\r\n\r\n<p>US Defense Secretary Jim Mattis apologized for the incident to his Indonesian counterpart, Ryamizard Ryacudu, on the sidelines of an ASEAN meeting in the Philippines, and the two were photographed shaking hands.</p>\r\n\r\n<p>&quot;I can confirm that he did a pull-aside with the Indonesian minister and expressed regret and apologized for the inconvenience,&quot; Captain Jeff Davis, a spokesman for Mattis, told Reuters.</p>\r\n\r\n<p>In a statement, the US embassy in Jakarta said: &quot;This issue has been resolved. There is no restriction on General Gatot&#39;s travel and we look forward to welcoming (him) to the United States.&quot;</p>\r\n\r\n<p>Indonesia generally enjoys good ties with the United States. But relations have sometimes been strained over US resource companies operating in Indonesia or alleged rights abuses involving Indonesia&#39;s military.</p>\r\n\r\n<p><strong>&#39;Security protocols&#39;</strong></p>\r\n\r\n<p>It was not immediately clear whether Nurmantyo, who has made official visits to the United States before, would attend the conference as scheduled on Monday and Tuesday.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"FILE PHOTO: Indonesia\'s Armed Forces Commander General Gatot Nurmantyo gesture as sit at his car after talks to reporters in Jakarta, Indonesia, January 5, 2017. Reuters\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2017/10/24/indonesia2.jpg/ALTERNATES/w640/Indonesia2.jpg\" style=\"width:640px\" />&nbsp;</p>\r\n\r\n<p>FILE PHOTO: Indonesia&#39;s Armed Forces Commander General Gatot Nurmantyo gesture as sit at his car after talks to reporters in Jakarta, Indonesia, January 5, 2017. Reuters</p>\r\n\r\n<p>In Washington, US Homeland Security Department spokesman Dave Lapan said the US embassy in Jakarta had told Nurmantyo&#39;s office that he might be delayed in boarding his flight because of unspecified &quot;US security protocols.&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lapan said the US government was unable to resolve the problem before Nurmantyo arrived at the airport and he was denied boarding. The general was eventually cleared and booked on another flight but &quot;he chose not to travel,&quot; Lapan added.</p>', 'blog-images/Indonesia1.jpg', 1, 3, '2018-10-28 07:52:27', '2018-11-03 14:12:50'),
(21, 19, 'Pakistan tries a new way to pay for a dam: Crowdsourcing', 'But when he saw the call on a Pakistani news show for overseas Pakistanis to donate to a new fundraising initiative...', '<p>But when he saw the call on a Pakistani news show for overseas Pakistanis to donate to a new fundraising initiative, he wired his money without hesitation.</p>\r\n\r\n<p>&ldquo;It&rsquo;s not a generic begging bowl,&rdquo; said Akhtar, 40. &ldquo;It&rsquo;s a specific demand for a specific outcome, and that motivates me.&rdquo;</p>\r\n\r\n<p>Akhtar was not donating to a charity, though. He was giving money to the government.</p>\r\n\r\n<p>The financially strapped Pakistani state is running a crowdsourcing-style campaign in a last-ditch effort to secure $14 billion to build two dams, which officials say will solve the country&rsquo;s endemic shortages of water and electricity. It has become the cause du jour for Pakistanis both at home and abroad.</p>\r\n\r\n<p>Television news shows regularly feature the day&rsquo;s biggest donors handing over their paychecks en masse, including the national soccer team, Pakistani politicians, government employees and members of the military.</p>\r\n\r\n<p>Radio ads across the country implore average citizens to donate even 10 rupees (less than 10 cents) over the phone. Pakistani celebrities have announced their own hefty donations on social media and made fundraising appeals to their fans.</p>\r\n\r\n<p>This week, Chief Justice Mian Saqib Nisar, who created the fund, berated the television channel Geo News in the Supreme Court for not donating &ldquo;a single penny&rdquo; to the dam project.</p>\r\n\r\n<p>&ldquo;Did Geo group hold a marathon transmission for dam funds?&rdquo; he said. &ldquo;Geo has not taken the lead over the dam issue even though it is the biggest of all channels.&rdquo;</p>\r\n\r\n<p>To allow for smoother overseas money transfers, the State Bank of Pakistan has even authorised the use of a service owned by PayPal, potentially opening the way for PayPal itself to enter one of the few countries where it is banned.</p>\r\n\r\n<p>That new openness reflects the gravity of Pakistan&rsquo;s financial situation as the government grasps for funding wherever it can. The country faces a balance-of-payments crisis, with a record $18 billion current account deficit for the last fiscal year.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Housing being built for workers on the proposed Diamer-Bhasha and Mohmand Dams in Chilas, Pakistan, Aug. 2018. Construction of the dams has yet to begin, and even the most optimistic estimates say they won’t be functional for at least a decade. (Danial Shah/The New York Times)\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/pakistan-dam-02.jpg/ALTERNATES/w300/pakistan-dam-02.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>Housing being built for workers on the proposed Diamer-Bhasha and Mohmand Dams in Chilas, Pakistan, Aug. 2018. Construction of the dams has yet to begin, and even the most optimistic estimates say they won&rsquo;t be functional for at least a decade. (Danial Shah/The New York Times)</p>\r\n\r\n<p>On Tuesday, Pakistan announced that it had secured a $6 billion assistance package from Saudi Arabia to help with the crisis. About half the assistance will be deposited at Pakistan&rsquo;s central bank, to shore up the country&rsquo;s dwindling finances &mdash; it has only enough cash left to cover about two months of imports &mdash; while the remaining $3 billion will be a deferred oil payment owed to the Saudis in three years.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With Pakistan still discussing a possible multibillion-dollar bailout from the International Monetary Fund, the Saudi assistance is likely to lower the amount requested. And Pakistan has already received several billion dollars in emergency loans this year from China, its major regional ally.</p>\r\n\r\n<p>Other doors were closed this year when the United States froze aid and Pakistan was returned to an international financial &ldquo;grey list,&rdquo; in both cases over concerns that Pakistan was not doing enough to combat terrorist groups operating on its soil.</p>', 'blog-images/pakistan-dam-01.jpg', 1, 7, '2018-10-28 07:54:52', '2018-11-04 13:32:12'),
(22, 18, 'Two die as car plunges into roadside ditch in Rajshahi', 'The accident took place on the Rajshahi-Natore Highway in the Bhangra area around 8:45am on Sunday...', '<p>The accident took place on the Rajshahi-Natore Highway in the Bhangra area around 8:45am on Sunday, said Golam Mostafa, chief of Belpukur Police Station.</p>\r\n\r\n<p>The dead have been identified as Niamat Ali, 55, and Abdul Manan Sarder, 58.</p>\r\n\r\n<p>&ldquo;The car was heading to Natore from Rajshahi and fell into a roadside ditch after the vehicle veered out of control, leaving its driver and a passenger dead on the spot,&rdquo; OC Mostafa said.&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Police recovered the bodies and have taken them to the Rajshahi Medical College Hospital morgue.</p>', 'blog-images/Rajshahi-Accident-281018.jpg', 1, 6, '2018-10-28 07:56:47', '2018-10-28 13:09:35'),
(23, 11, 'Replacing Ronaldo has proved tougher than Real Madrid expected', 'Ronaldo was Real’s all-time top scorer, notching up 451 goals in 438 games in all competitions....', '<p>Ronaldo was Real&rsquo;s all-time top scorer, notching up 451 goals in 438 games in all competitions. He led the club to four Champions League titles from the last five available and was invariably the man who dug his side out of a hole with a goal from nothing just when they most needed a hero.</p>\r\n\r\n<p>The message from inside the club, however, was that they did not need to make a &lsquo;Galactico&rsquo; splash in the transfer market, and that the answer lay within the team already.</p>\r\n\r\n<p>Gareth Bale, signed in 2013 for a then world-record 85.3 million pounds ($109.12 million) from Tottenham Hotspur following an extended public courting, had long been marked out by Real president Florentino Perez as the man to take over from Ronaldo.</p>\r\n\r\n<p>It was also suggested that French forward Karim Benzema would be freed from the shackles many perceived the Portuguese had placed on him and finally be able to play as a central striker.</p>\r\n\r\n<p>Then there was Marco Asensio. The 22-year-old is arguably the hottest prospect in Spanish football and he was earmarked for a place in the front three. Goodbye to the &lsquo;BBC&rsquo; (Bale, Benzema, Cristiano) trident, hello to the &lsquo;BBA&rsquo;.</p>\r\n\r\n<p>Things started well. Real enjoyed four wins and a draw from their first five La Liga games, with the trio netting eight of the 12 goals scored, while Roma were swatted aside in their Champions League group-stage opener. Bale looked the business, while Benzema threatened to become a goal-scoring machine.</p>\r\n\r\n<p>However, following September&rsquo;s 1-0 win over Espanyol, Real had five games without a win &ndash;- a run in which they went eight hours and one minute without scoring.</p>\r\n\r\n<p>While youngster Asensio can be forgiven for having his ups and downs, Bale picked up one of the many injuries that have blighted his time in the Spanish capital and Benzema looked the shadow of a striker capable of leading the line for the European champions.</p>\r\n\r\n<p>It was the kind of thing that never happened when Ronaldo was at the club. It is no coincidence that Real have endured their most barren run in terms of victories and goals since just before the Portuguese joined the club in 2009.</p>\r\n\r\n<p>They have slipped to seventh in La Liga, behind newly promoted Valladolid, and the pressure is mounting on new coach Julen Lopetegui, who when he took over the club would have envisaged Ronaldo being a key part of his squad.</p>\r\n\r\n<p>With Sunday&rsquo;s Clasico looming, the first for 11 years that will feature neither the Portuguese nor Barcelona&rsquo;s Lionel Messi, the onus is on Real to prove that life after Ronaldo does exist. A defeat would only intensify the storm clouds brewing over the Bernabeu. ($1 = 0.7817 pounds)</p>', 'blog-images/ronaldo-01.jpg', 1, 3, '2018-10-28 12:34:13', '2018-10-28 14:21:52'),
(24, 16, 'Arms and the very bad men', 'A few days ago, Pat Robertson, the evangelical leader, urged America not to get too worked up about the torture and murder of Jamal Khashoggi..', '<p>A few days ago, Pat Robertson, the evangelical leader, urged America not to get too worked up about the torture and murder of Jamal Khashoggi, because we shouldn&rsquo;t endanger &ldquo;$100 billion in arms sales.&rdquo; I guess he was invoking the little-known 11th Commandment, which says, &ldquo;On the other hand, thou shalt excuse stuff like killing and bearing false witness if weapons deals are at stake.&rdquo;</p>\r\n\r\n<p>OK, it&rsquo;s not news that the religious right has prostrated itself at Donald Trump&rsquo;s feet. But Trump&rsquo;s attempt to head off retaliation for Saudi crimes by claiming that there are big economic rewards to staying friendly with killers &mdash; and the willingness of his political allies to embrace his logic &mdash; nonetheless represents a new stage in the debasement of America.</p>\r\n\r\n<p>It&rsquo;s not just that Trump&rsquo;s claims about the number of jobs at stake &mdash; first it was 40,000, then 450,000, then 600,000, then 1 million &mdash; are lies. Even if the claims were true, we&rsquo;re the United States; we&rsquo;re supposed to be a moral beacon for the world, not a mercenary nation willing to abandon its principles if the money is good.</p>\r\n\r\n<p>That said, the claims are, in fact, false.</p>\r\n\r\n<p>First, there is no $100 billion Saudi arms deal. What the Trump administration has actually gotten are mainly &ldquo;memorandums of intent,&rdquo; best seen as possible future deals rather than commitments. Many of these potential deals would involve production in Saudi Arabia rather than the US And the sales, if they did materialise, would be spread over a number of years.</p>\r\n\r\n<p>It looks unlikely, then, that deals with Saudi Arabia will raise US annual arms exports by more than a few billion dollars a year. When you bear in mind that the industries involved, mainly aerospace, are highly capital intensive and don&rsquo;t employ many workers per dollar of sales, the number of US jobs involved is surely in the tens of thousands, if that, not hundreds of thousands. That is, we&rsquo;re talking about a rounding error in a US labour market that employs almost 150 million workers.</p>\r\n\r\n<p>Another way to look at Saudi arms sales is to notice how small the stakes are compared with other areas where Trump is casually disrupting business relations. He seems, for example, to be eager for a trade war with China, which imported $187 billion worth of US goods and services last year.</p>\r\n\r\n<p>Finally, it&rsquo;s worth noting that under current conditions, increasing exports, even if you can do it, won&rsquo;t create net additional jobs for the US economy. Why? Because the Federal Reserve believes that we&rsquo;re at full employment, and any further strengthening of the economy will induce the Fed to raise interest rates. As a result, jobs added in one place by things like arms sales will be offset by jobs lost elsewhere as higher rates deter investment or make the US less competitive by strengthening the dollar.</p>\r\n\r\n<p>But let&rsquo;s get real: Trump isn&rsquo;t going easy on the Saudis because of the jobs they provide to defence workers. His ever-inflating count of how many jobs are involved is in itself a dead giveaway that arms sales are an excuse, not a real motive, for his actions. So what&rsquo;s the real reason he&rsquo;s so willing to forgive torture and murder?</p>\r\n\r\n<p>One answer is that he doesn&rsquo;t actually disapprove of what the Saudis did. By now it&rsquo;s a commonplace that Trump seems far more comfortable with brutal autocrats than with the leaders of our democratic allies. Remember, when Trump visited Saudi Arabia, his commerce secretary exulted over the fact that there were no protesters to be seen &mdash; something that tends to happen when protesters get beheaded.</p>\r\n\r\n<p>Oh, and a president who proclaims that the news media are &ldquo;enemies of the people&rdquo; may feel that torturing and murdering a critical journalist is not such a bad idea.</p>\r\n\r\n<p>Beyond that, the Saudis have funnelled tens of millions of dollars to Trump personally, and are continuing to do so. And the very real millions going to Trump are a much more plausible explanation of his friendliness toward Mohammed bin Salman than the mythical billions going to US arms manufacturers.</p>\r\n\r\n<p>Of course, Trump loyalists bristle at the suggestion that he is letting his financial interests shape US policy. But has Trump ever made a personal sacrifice in the public interest?</p>\r\n\r\n<p>Anyway, we&rsquo;re not supposed to have to trust that the big money a president receives from foreign governments isn&rsquo;t influencing his decisions. The emoluments clause of the Constitution prohibits the president from accepting any such favours in the first place. Unfortunately, Republicans have decided that this clause, like so much of the Constitution, doesn&rsquo;t apply when their party is in power.</p>\r\n\r\n<p>So, as I said, what we&rsquo;re looking at here is another step in the debasement of our nation. Accepting torture and murder is a betrayal of American principles; trying to justify that betrayal by appealing to supposed economic benefits is a further betrayal. And when you add in the fact that the claimed economic payoff is a lie, and that the president&rsquo;s personal profit is a much more likely explanation for his actions &mdash; well, genuine patriots should be deeply ashamed of what we&rsquo;ve come to as a nation.</p>', 'blog-images/trump-mohammed-1170x660.jpg', 1, 4, '2018-10-28 12:35:50', '2018-10-28 14:11:12'),
(25, 17, 'Sheikh Mujib a failure: Tarique', '\"Awami League leader Sheikh Mujib\'s 30-year political life is a failure, where as Ziaur Rahman succeeded ...', '<p>&quot;Awami League leader Sheikh Mujib&#39;s 30-year political life is a failure, where as Ziaur Rahman succeeded in everything during his short political career of five years. He declared the independence,&quot; he said&nbsp;on Wednesday&nbsp;at a discussion in London.</p>\r\n\r\n<p>The BNP leader has been living in the UK&nbsp;since 2008 after securing a bail from the Supreme Court.</p>\r\n\r\n<p>&quot;It&nbsp;took minutes for Sheik Mujib to kill democracy in the country in 1975; he disbanded his own party the Awami League. Sheikh Mujib gifted the nation a famine in 1974. People were insecure even when at home during his regime,&quot; he said.</p>\r\n\r\n<p>Tarique claimed that Ziaur Rahman brought economic prosperity and political freedom after coming to power.</p>\r\n\r\n<p>&quot;Ziaur Rahman brought the country&#39;s economy out of the rut and introduced multi-party democracy. The rise in remittances and income from the garments exports started during his regime. The manpower export market in the Middle East had also opened during his time,&quot; said the BNP leader.</p>\r\n\r\n<p>In his speech at the discussion marking the 33rd death anniversary of his father, Tarique rapped the RAB saying that it has become a&nbsp; force to protect the Awami League.</p>\r\n\r\n<p>Tarique reiterated her mother&#39;s demand to disband the elite police unit.</p>\r\n\r\n<p>He said that RAB was created to check terrorism during the BNP&#39;s regime. And that the people got relief as the criminals were scared of the RAB.</p>\r\n\r\n<p>&quot; But, now when the Awami League is in power. It&#39;s the opposite. RAB is alleged of abducting and killing citizens for money from Awami League affiliated criminals.</p>\r\n\r\n<p>&quot;RAB has lost its credibility. It is now known as a force to protect Awami Leaguers. It&#39;s now the people&#39;s demand to disband &nbsp;RAB, &quot; he added.</p>', 'blog-images/Tarique-Rahman\'s-Speech-at-.jpg', 1, 2, '2018-10-28 12:37:05', '2018-11-04 13:35:01'),
(26, 16, 'Fear of a black continent', 'Emmanuel Macron, the youthful and ambitious president of the French, likes to talk about African birthrates. In summer 2017...', '<p>Emmanuel Macron, the youthful and ambitious president of the French, likes to talk about African birthrates. In summer 2017, he answered a question about why there couldn&rsquo;t be a Marshall Plan for Africa by calling the continent&rsquo;s problems &ldquo;civilizational&rdquo; and lamenting that African countries &ldquo;have seven or eight children per woman.&rdquo;</p>\r\n\r\n<p>This was attacked by some as racist, defended by others as hardheaded realism about development economics. Macron obviously felt comfortable with what he&rsquo;d said because he returned to the idea last month at a Gates Foundation conference. (Bill Gates himself has also been talking a lot lately about population control and development in Africa.) &ldquo;I always say,&rdquo; Macron told the assembled do-gooders, &ldquo;&rsquo;present me the woman who decided, being perfectly educated, to have seven, eight or nine children.&rsquo;&rdquo;</p>\r\n\r\n<p>This time there was a specifically female response: A Catholic University of America professor, Catherine Pakaluk, posted a photo of six of her eight children under the Twitter hashtag #postcardsforMacron, and soon there was a flood of female PhDs posting pictures of their broods.</p>\r\n\r\n<p>As a pro-natalist, I am in full sympathy with the Macron-tweaking mothers, but as a descriptive matter, the French president is basically correct. It&rsquo;s a law of modern Western and East Asian history (we&rsquo;ll call it Macron&rsquo;s Law hereafter) that with wealth and education birthrates fall &mdash; and fall, and fall. The existence of occasional exceptions only highlights how exceptional they are.</p>\r\n\r\n<p>This plunge has happened without population-control interventions as well as with them, and because Western-supported population control efforts in the developing world tended to be inhumane and not-so-mildly racist, over the last couple of decades they have fallen somewhat out of fashion, with Gatesian philanthropists and politicians alike.</p>\r\n\r\n<p>So why are they creeping back into the discussion? For three reasons: Because African birthrates haven&rsquo;t slowed as fast as Western experts once expected, because European demographics are following Macron&rsquo;s Law toward the grave, and because European leaders are no longer nearly so optimistic about assimilating immigrants as even a few short years ago.</p>\r\n\r\n<p>In 2004, the United Nations projected that Africa&rsquo;s population would level off by 2100 at around 2 billion. Today, it projects that it will reach 4.5 billion instead. This change in the expected trend is more likely a result of sluggish economic growth than proof of an African exception to Macron&rsquo;s Law &mdash; though it holds open the possibility that Africa could be such an exception. But whatever the explanation, by century&rsquo;s end, 2 in 5 humans could be African.</p>\r\n\r\n<p>This trend would have revived a certain kind of population-bomb anxiety no matter what, but the anxiety in Europe is a little more specific than that &mdash; because over the same period, Europe&rsquo;s population is likely to drop by about 100 million. (Western Europe&rsquo;s leaders are a vanguard here: Neither Macron nor Angela Merkel nor Theresa May have any biological children.) In the late 1990s Europe and Africa had about the same population; a hundred years later, there could be 7 Africans for every European. And the experience of recent refugee crises has demonstrated to European leaders both how easily populations can move northward and how much harder assimilation may be than they once hoped.</p>\r\n\r\n<p>So Macron is not likely to be alone in his fixation on large African families. An Afrophobia that a decade ago was confined to white-identitarians is likely to become an obsession of Europe&rsquo;s technocratic centre as well as its nationalist parties. The fixation will be genteel and diplomatic and couched in the language of development, but the upshot will be clear: We must find a way to convince African women to stop having so many babies.</p>\r\n\r\n<p>However, in addition to being cruel, past population control campaigns were often ineffective, so it&rsquo;s likely that Macron and his successors will mostly fail in their anti-natal efforts. And even the thing that might lead to the falling birthrate they desire, rapid African economic growth, might also accelerate migration in the short term &mdash; because poor people who suddenly get richer also gain the means and opportunity to move to somewhere richer still.</p>\r\n\r\n<p>Which is why anyone who hopes for something other than destabilization and disaster from the Eurafrican encounter should hope for a countervailing trend in which Europeans themselves begin to have more children. This would not forestall the near-inevitable northward migration, but it would make it easier to assimilate immigrants once they arrived &mdash; European economies would be stronger, ethnic polarization would not fall so dramatically along generational lines, and in politics, youthful optimism and ambition might help counteract the fear and pessimism of white Europeans growing old alone.</p>\r\n\r\n<p>Of course government efforts to raise the Western birthrate, France&rsquo;s included, have been no more obviously successful than Western-sponsored efforts to cut birthrates elsewhere in the world.</p>\r\n\r\n<p>But focusing on European fertility has at least one moral advantage over Macron&rsquo;s finger-wagging at African baby-making: It&rsquo;s the part of the future that Europeans actually deserve to control.</p>', 'blog-images/africa-migrant-children-italy-1170x660.jpg', 1, 1, '2018-10-28 12:38:20', '2018-11-04 03:53:23'),
(27, 21, 'Stopped by striking transport workers, 7-day-old baby girl dies in ambulance', 'The infant from Azmir area in Moulvibazar’s Borholekha Upazila died at Bianibazar in Sylhet on Sunday afternoon. ..', '<p>The infant from Azmir area in Moulvibazar&rsquo;s Borholekha Upazila died at Bianibazar in Sylhet on Sunday afternoon.&nbsp;</p>\r\n\r\n<p>Her father Kuton Mia is an expatriate working in Dubai.</p>\r\n\r\n<p>Her uncle Akbar Ali Ful Mia said he and her mother Saira Begum took the baby to Borholekha Upazila Health Complex at about 9:30am after she had fallen ill.</p>\r\n\r\n<p>The doctor at the health complex referred her to Sylhet Sadar for better treatment.</p>\r\n\r\n<p>After they started for Sylhet on an ambulance at 10:30am, the transport workers stopped them at Duser Bazar area first.</p>\r\n\r\n<p>They were held up for half an hour before being allowed to leave following requests, Ful Mia said.</p>\r\n\r\n<p>The protesting transporters stopped the ambulance again in Chandgram area in Bianibazar.</p>\r\n\r\n<p>They let the ambulance go when the baby&rsquo;s condition deteriorated after one and a half hours of altercation there, Ful Mia said.</p>\r\n\r\n<p>&ldquo;The baby stopped moving at the time and the doctor at Bianibazar Upazila Health Complex declared her dead when we reached there around 2pm,&rdquo; her uncle added.</p>\r\n\r\n<p>Borholekha Upazila Health and Family Planning Officer Dr Ahmad Hossain said the baby&rsquo;s family rented a private ambulance as the health facility&rsquo;s one was on call.</p>\r\n\r\n<p>&ldquo;They were stopped twice on the way. These killed a long time, leading the baby to die on the way,&rdquo; he added.</p>\r\n\r\n<p>He also said it might have been possible to save the baby&rsquo;s life if the ambulance was not stopped.</p>\r\n\r\n<p>The baby girl had been suffering from jaundice, according to the doctor.</p>\r\n\r\n<p>Bangladesh Road Transport Workers&rsquo; Federation General Secretary Osman Ali on Saturday announced a 48-hiur strike from Sunday morning over several demands.</p>\r\n\r\n<p>The demands include making all offences under the Road Transport Act bailable, the cancellation of the provision that allows a worker to be fined Tk 500,000 for involvement in a road crash, and lowering minimum educational qualification required for obtaining driving licences from class VIII to class V.</p>', 'blog-images/moulvibazar--baby.jpg', 1, 4, '2018-10-28 12:39:46', '2018-11-04 16:32:24'),
(28, 21, 'Shipping Minister Shajahan Khan silent on transport strike', 'Khan, the acting president of the Bangladesh Road Transport Workers Federation, the top transport workers...', '<p>Khan, the acting president of the Bangladesh Road Transport Workers Federation, the top transport workers&rsquo; association, avoided the questions when reporters asked for his statement on the strike as he left his offices at the Secretariat on Sunday.</p>\r\n\r\n<p>When the media persisted with their questions, he said he had &lsquo;no comment&rsquo;.</p>\r\n\r\n<p>The 48-hour &lsquo;halt to service&rsquo; was called by the Bangladesh Road Transport Workers Federation to call for revisions to parts of the new road transport law and to press for a list of eight demands.</p>\r\n\r\n<p>Long-haul and freight service has been halted across the country, while public transport in Dhaka, Chattogram and other major cities is also closed. It has been alleged that transport workers are blocking private cars and other vehicles in some areas.</p>\r\n\r\n<p>The long-awaited draft of the Road Transport Act was passed after pressure following a bus accident in Dhaka on Jul 29 that resulted in the death of two students and which triggered student protests calling for road safety.</p>\r\n\r\n<p>But transport workers have objected to several parts of the law and are demanding they be cancelled.</p>\r\n\r\n<p>The demands include making all accidents under the Road Transport Act &lsquo;bailable&rsquo;, the cancellation of the provision that allows a worker to be fined Tk 500,000 for involvement in a road crash, lowering minimum educational qualification required for obtaining driving licences from class VIII to class V, for transport worker representation on investigation committees on cases under section 302, an end to harassment by police, to set fines according to the wage scale and to require certification from a Workers Federation representative when vehicles are registered and penalties are overturned.</p>\r\n\r\n<p>But Road Transport Minister Obaidul Quader said on Sunday that it was not possible to accept the demands of the transport workers ahead of the elections and called for them to end their strike.</p>\r\n\r\n<p>&ldquo;They must be patient,&rdquo; he said. &ldquo;If there are any legitimate concerns they can be resolved through discussion.&rdquo;</p>', 'blog-images/sajahan-khan.jpg', 1, 2, '2018-10-28 12:41:10', '2018-11-04 12:58:41');
INSERT INTO `blog_ones` (`id`, `category_id`, `blog_one_title`, `blog_one_short_description`, `blog_one_long_description`, `blog_one_image`, `publication_status`, `hit_count`, `created_at`, `updated_at`) VALUES
(29, 20, 'Scientists develop clothing that can communicate', 'Embedding high speed optoelectronic semiconductor devices, including light-emitting diodes (LEDs) and diode', '<p>Embedding high speed optoelectronic semiconductor devices, including light-emitting diodes (LEDs) and diode photodetectors, into washable fabrics also makes it possible to produce clothing that communicates optically with other devices.</p>\r\n\r\n<p>This discovery, described in the journal Nature, could unleash a new &#39;Moore&#39;s Law&#39; for fibres, in other words, a rapid progression in which the capabilities of fibres would grow rapidly and exponentially over time, said researchers from the Massachusetts Institute of Technology (MIT) in Boston.</p>\r\n\r\n<p>The key breakthrough for producing these new fibres was to add to the preform light-emitting semiconductor diodes the size of a grain of sand, and a pair of copper wires a fraction of a hair&#39;s width.</p>\r\n\r\n<p>When heated in a furnace during the fibre-drawing process, the polymer preform partially liquifies, forming a long fibre with the diodes lined up along its centre and connected by the copper wires a fraction of a hair&#39;s width.</p>\r\n\r\n<p>When heated in a furnace during the fibre-drawing process, the polymer preform partially liquifies, forming a long fibre with the diodes lined up along its centre and connected by the copper wires.</p>\r\n\r\n<p>&quot;We are anticipating the emergence of a &#39;Moore&#39;s law&#39; analogue in fibres in the years ahead,&quot; said Yoel Fink from the varsity.</p>\r\n\r\n<p>&quot;It is already allowing us to expand the fundamental capabilities of fabrics to encompass communications, lighting, physiological monitoring, and more. In the years ahead, fabrics will deliver value-added services and will no longer just be selected for aesthetics and comfort,&quot; Fink added.</p>\r\n\r\n<p>In this case, the solid components were two types of electrical diodes made using standard microchip technology: LEDs and photosensing diodes.</p>\r\n\r\n<p>The resulting fibres were then woven into fabrics, which were laundered 10 times to demonstrate their practicality as possible material for clothing.</p>\r\n\r\n<p>One of the advantages of incorporating function into the fibre material itself is that the resulting fibre is inherently waterproof.</p>\r\n\r\n<p>To demonstrate this, the team placed some of the photodetecting fibres inside a fish tank.</p>\r\n\r\n<p>A lamp outside the aquarium transmitted music through the water to the fibres in the form of rapid optical signals.</p>\r\n\r\n<p>The fibres in the tank converted the light pulses -- so rapid that the light appears steady to the naked eye -- to electrical signals, which were then converted into music. The fibres survived in the water for weeks.</p>', 'blog-images/cloth-communicate.jpg', 1, 2, '2018-10-28 12:42:51', '2018-11-04 13:35:38'),
(30, 19, 'Bangladesh has just too many banks: Finance Minister Muhith', '“The banking sector has become too large. Too many banks, too many financial institutions,” he said to reporters...', '<p>&ldquo;The banking sector has become too large. Too many banks, too many financial institutions,&rdquo; he said to reporters when asked about the sector after a meeting at the Secretariat on Wednesday.</p>\r\n\r\n<p>A total of 58 government and private commercial banks and 34 non-bank financial institutions are operating currently.</p>\r\n\r\n<p>Though many bankers believe the number of banks in the country was already too large, the government gave licence to nine more in 2012. Muhith had admitted that the banks were cleared on political considerations.</p>\r\n\r\n<p>Later, the government cleared the Border Guard Bangladesh&rsquo;s Simanto Bank.</p>\r\n\r\n<p>The banking sector has been in discussions for huge loan scams in past few years. The banks cleared in 2012 are also struggling with irregularities and liquidity crisis.</p>\r\n\r\n<p>As some of the new banks are already battling for survival, Muhith said in November last year that the government was approving three more commercial banks because &ldquo;many are still out of banking services&rdquo;.</p>\r\n\r\n<p>The amount of bad loans totalled around Tk 1.4 trillion, or 15 percent of total loans disbursed, according to Bangladesh Bank data released in June.</p>\r\n\r\n<p>IMF Executive Director Subir Vithal Gokarn expressed concerns over the bad loans during a meeting with Muhith on the sidelines of the annual IMF-World Bank meetings around two weeks ago.</p>\r\n\r\n<p>Muhith said he told the IMF official that he would make a report before this government ends its term so that the next one can take effective steps to address the issue.</p>', 'blog-images/cloth-communicate.jpg', 1, 0, '2018-10-28 12:46:41', '2018-10-28 13:04:49'),
(31, 21, 'Coke, Pepsi, Nestle top makers of plastic waste: Greenpeace', 'Working with the Break Free From Plastic movement, Greenpeace said it orchestrated 239 plastic clean-ups in 42 countries', '<p>Working with the Break Free From Plastic movement, Greenpeace said it orchestrated 239 plastic clean-ups in 42 countries around the world, which resulted in the audit of 187,000 pieces of plastic trash.</p>\r\n\r\n<p>The aim was to get a picture of how large corporations contribute to the problem of pollution.</p>\r\n\r\n<p>Coca-Cola, the world&#39;s largest soft drink maker, was the top waste producer, Greenpeace said, with Coke-branded plastic trash found in 40 of the 42 countries.</p>\r\n\r\n<p>&quot;These brand audits offer undeniable proof of the role that corporations play in perpetuating the global plastic pollution crisis,&quot; said Von Hernandez, global coordinator for Break Free From Plastic.</p>\r\n\r\n<p>Overall, the most common type of plastic found was polystyrene, which goes into packaging and foam coffee cups, followed closely by PET, used in bottles and containers.</p>\r\n\r\n<p>&quot;We share Greenpeace&#39;s goal of eliminating waste from the ocean and are prepared to do our part to help address this important challenge,&quot; a Coke spokesman said in a statement. The company has pledged to collect and recycle a bottle or can for every one it sells by 2030.</p>\r\n\r\n<p>All three companies have made pledges about their packaging for 2025. Coke says all its packaging will be recyclable, Nestle says it will be recyclable or reusable and PepsiCo says it will be recyclable, compostable or biodegradable.</p>\r\n\r\n<p>They are all also working to use recycled content in their packaging.</p>\r\n\r\n<p>Nestle, the world&#39;s largest food and drink maker, said it recognised the issue and is working hard to eliminate non-recyclable plastics. It said it was also exploring different packaging solutions and ways to facilitate recycling and eliminate plastic waste.</p>\r\n\r\n<p>PepsiCo was not immediately available to comment outside regular US business hours.</p>', 'blog-images/plastic-waste-buriganga-03092018-0006.jpg', 1, 2, '2018-10-28 12:48:36', '2018-11-01 06:57:07'),
(32, 13, 'Bangladesh researcher Dr Samir Saha wins UNESCO prize for microbiology', 'Dr Saha heads the microbiology department of the Dhaka Shishu (Children) Hospital. He is also the executive director', '<p>Dr Saha heads the microbiology department of the Dhaka Shishu (Children) Hospital. He is also the executive director of The Child Health Research Foundation at the Bangladesh Institute of Child Health.</p>\r\n\r\n<p>He is sharing the award with Professor Shahida Hasnain of Pakistan.</p>\r\n\r\n<p>UNESCO Director-General Irina Bokova named the two laureates on the recommendation of an international jury of experts in microbiology, the organisation said in a recent media release.</p>\r\n\r\n<p>The prize will be presented to the two laureates on Nov 6 during the 39th session of the organisation&rsquo;s General Conference.</p>\r\n\r\n<p>The 195 member states of the organisation will take part in the conference from Oct 30 to Nov 14.</p>\r\n\r\n<p>As a leading researcher in paediatrics, Dr Saha played a crucial role in introducing to Bangladesh vaccines against two bacteria that cause meningitis, which had a direct positive impact on the health of children in the country.</p>\r\n\r\n<p>He has also led research into the resistance to treatment of some pneumococcal diseases.</p>\r\n\r\n<p>Professor Shahida Hasnain is the founder and chairperson of the Department of Microbiology and Molecular Genetics at the University of Punjab in Lahore, Pakistan.</p>\r\n\r\n<p>She has contributed to advances in research in environmental, agricultural and medical microbiology. She has worked on the heavy metal detoxification mechanisms, salt stress tolerance mechanisms, and bacterial morphogenesis.</p>\r\n\r\n<p>The Carlos J Finlay Prize for Microbiology has an endowment of $10,000, which will be divided between the two laureates.</p>\r\n\r\n<p>Created in 1977 by UNESCO at the initiative of the Government of Cuba, the prize rewards scientists whose research has made an outstanding contribution to microbiology and its applications.</p>', 'blog-images/Samir_Saha.jpg', 1, 12, '2018-10-28 12:49:54', '2018-11-04 12:25:00'),
(33, 15, 'Ayub Bachchu, who popularised rock music in Bangladesh, dies', 'Bachchu was brought in an unconscious state to Dhaka’s Square Hospital around 9:15am on Thursday,', '<p>Bachchu was brought in an unconscious state to Dhaka&rsquo;s Square Hospital around 9:15am on Thursday, said Emergency Division nurse Habibur Rahman.</p>\r\n\r\n<p>The singer, guitarist, lyricist and composer was a founding member of the band LRB (Love Runs Blind). He was 56 years old.</p>\r\n\r\n<p>Fans, musicians and cultural figures rushed to the hospital after news of his death spread.</p>\r\n\r\n<p>President Md Abdul Hamid and Prime Minister Sheikh Hasina, who is currently in Saudi Arabia, have expressed their grief over the death of the singer.</p>\r\n\r\n<p>Cultural personalities as well as fans pour their hearts out online over the news of Bachchu&rsquo;s death.</p>\r\n\r\n<p>&ldquo;Ayub Bachchu! No!! Why?? Who will now play the blues with you throwing us into the blues? This is NOT fair! There was so much to be done, to be heard, to be seen, to be composed, to be sung, to be loved, to be jammed, to be toured, to be released, to be hummed, to be strummed...&rdquo; wrote ABC Radio host Naveed Mahbub in his Facebook post.</p>\r\n\r\n<p>&ldquo;A star of our teenage and youth left us leaving his silver guitar behind. I have spent thousand emotional nights with your songs; those memories will now be tagged with your songs. Your music will remain in my heart as long as I live. You were not just a singer but a chapter in my life,&rdquo; wrote fan Tanvir Ahmed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote><a href=\"https://twitter.com/aroyfloyd\"><img alt=\"\" src=\"https://pbs.twimg.com/profile_images/853288814030143488/UX0Wgstd_normal.jpg\" /></a>\r\n\r\n<p><a href=\"https://twitter.com/aroyfloyd\">Anupam Roy</a><a href=\"https://twitter.com/aroyfloyd\"><strong>✔</strong>@aroyfloyd</a></p>\r\n\r\n<p>বাচ্চু ভাই-এর (আয়ুব বাচ্চু) এভাবে হঠাৎ করে চলে যাওয়াটা মেনে নেওয়া কঠিন। বাংলা গান চিরদিন মনে রাখবে এই চমৎকার গুণী মানুষটিকে। <a href=\"https://twitter.com/hashtag/%E0%A6%B8%E0%A7%87%E0%A6%87%E0%A6%A4%E0%A7%81%E0%A6%AE%E0%A6%BF?src=hash\">#সেইতুমি</a></p>\r\n\r\n<p><a href=\"https://twitter.com/aroyfloyd/status/1052788207698341891\">11:07 AM - Oct 18, 2018</a>&nbsp;&middot;&nbsp;<a href=\"https://twitter.com/search?q=place%3A5f55bb82cf16ac81\">Bengaluru South, India</a></p>\r\n\r\n<ul>\r\n	<li><a href=\"https://twitter.com/intent/like?tweet_id=1052788207698341891\">555</a></li>\r\n	<li><a href=\"https://twitter.com/aroyfloyd/status/1052788207698341891\">132 people are talking about this</a></li>\r\n</ul>\r\n</blockquote>\r\n\r\n<p><a href=\"https://support.twitter.com/articles/20175256\">Twitter Ads info and privacy</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>LRB bandmate Shamim told&nbsp;<a href=\"http://bdnews24.com/\">bdnews24.com</a>&nbsp;that Bachchu had been ill for some time. His condition suddenly worsened on Thursday morning and he was taken to Square Hospital.</p>\r\n\r\n<p>&ldquo;He had a heart attack this morning,&rdquo; Square Hospital Medical Service Director Mirza Nazimuddin told the media. &ldquo;The driver brought him to the hospital around 9:15pm. He died before he arrived.&rdquo;</p>\r\n\r\n<p>Ayub Bachchu, also known as AB to his fans, carved out a legendary position in the history of Bangladesh&rsquo;s band music.</p>\r\n\r\n<p>In addition to his extraordinary role in rock music as a singer and composer, Bachchu was one of the leading guitarists in the country. He was also well-known for his distinctive style and the flamboyant look of his guitars, which captivated audiences for over four decades.</p>\r\n\r\n<p>On Aug 16, his birthday, Bachchu told&nbsp;<a href=\"http://bdnews24.com/\">bdnews24.com</a>&nbsp;that his greatest achievement was being able to make his fans happy and earn their love. He also said he was planning to write a memoir.</p>\r\n\r\n<p>&ldquo;I&rsquo;ll begin the work after the Eid. I&rsquo;ll go somewhere outside Dhaka, where there are no phones and no internet. I will go where I can eat fish freshly caught in the river, eat rice and drink water. I&rsquo;ll come back to Dhaka after the work is finished.&rdquo;</p>\r\n\r\n<p>There is still a long way to go, Bachchu had told&nbsp;<a href=\"http://bdnews24.com/\">bdnews24.com</a>&nbsp;that day.</p>\r\n\r\n<p>Bachchu will be taken to the Central Shaheed Minar at 10:00 am on Friday so that people can pay their respects, cultural organiser Nasir Uddin Yusuf told&nbsp;<a href=\"http://bdnews24.com/\">bdnews24.com</a>. His funeral prayers will be held at National Eidgah premises.</p>\r\n\r\n<p>The legendary singer will be laid to rest beside his mother in Chattogram on Saturday following another funeral service after his children return from abroad.&nbsp;&nbsp;</p>\r\n\r\n<p>Ayub Bachchu was born in Chattogram in 1962. In an interview Bachchu said he always loved music and became a singer through &lsquo;trial and error&rsquo; during his early years. He fell in love with the western music and began to play guitar. He drew inspiration from the guitarists like Jimi Hendrix, Joe Satriani and Steve Moore. While in college he formed a band in college named &lsquo;Ugly Boys&rsquo;. They performed at neighbourhood programmes.</p>\r\n\r\n<p>As a professional, he joined the band Feelings in 1978 and then the band Souls In 1980. After playing with them for 10 years, he formed LRB or Love Runs Blind from &ldquo;the deepest of his impulses&rdquo; in 1991.</p>\r\n\r\n<p>LRB started playing live gigs in the following years and ushered in a new chapter in the history of music in Bangladesh. With its eagerness to create something revolutionary, LRB debuted with a double album in 1992.</p>\r\n\r\n<p>Bachchu&rsquo;s band performed more than 500 open-air and about 2,000 indoor concerts at home and abroad, according to its website.</p>\r\n\r\n<p>His first show outside Bangladesh was held in India in 1997. LRB is the only Bangla rock band to perform at the Madison Square Garden in New York. Bachchu performed in seven states during his tour of the United States in 1998, according to the LRB website.</p>\r\n\r\n<p>His songs &lsquo;Cholo Bodle Jai&rsquo;, &lsquo;Ferari Ei Monta Amar&rsquo;, &lsquo;Ami Koshto Pete Bhalobashi&rsquo;, &lsquo;Ekdin Ghumbhanga Shohore&rsquo;, &lsquo;Ekhon Onek Raat&rsquo;, &lsquo;Hashte Dekho Gaite Dekho&rsquo;, and many others &ndash; will linger in the hearts of his fans.</p>', 'blog-images/aiyub-bachchu.jpg', 1, 26, '2018-10-28 12:59:15', '2018-11-05 11:55:48'),
(34, 11, 'Juve take charge of Group H with win at Man United', 'Paulo Dybala\'s 17th minute goal, a simple conversion after a low cross from the right by former United favourite Cristiano Ronaldo...', '<p>Paulo Dybala&#39;s 17th minute goal, a simple conversion after a low cross from the right by former United favourite Cristiano Ronaldo, won the game but the dominant Italian champions could have won by a much more convincing margin.</p>\r\n\r\n<p>United needed their Spanish keeper David de Gea to be in top form as he made a series of good saves, including an excellent effort to keep out a second-half strike from Ronaldo.</p>\r\n\r\n<p>If United fans can see little hope of their side catching up the top trio in the Premier League they will also know after this game that there is precious chance of them doing better in continental action.</p>\r\n\r\n<p>With four points leaving them second in their group, ahead of Valencia and Young Boys, United may still progress to the knockout stages but the gulf between them and a team equipped to reach the latter stages was all too evident.</p>\r\n\r\n<p>United were unchanged from the team that drew at Chelsea in the Premier League on Saturday but the visitors very quickly demonstrated that they had no fear of the task in front of them. Perhaps United&#39;s players would have been better joining their manager Jose Mourinho on the ten-minute walk from the team&#39;s hotel to the stadium than sitting in traffic for an hour on the team bus because they made a woefully slow start. Right from the outset, Massimiliano Allegri&#39;s side were sharper, faster, more precise and showed more purpose than Mourinho&#39;s men, who struggled to even match the tempo of the Italian champions.</p>\r\n\r\n<p>The most disconcerted Juve looked in the early exchanges was when a fan invaded the pitch only to be apprehended by security before he could reach his apparent target, Ronaldo. It was no surprise at all when, in the 17th minute, Juve took the lead.</p>\r\n\r\n<p>Ronaldo broke down the right and put in a low cross towards the near post which Chris Smalling and Juan Cuadrado challenged for before the ball fell kindly to Dybala, who converted with ease.</p>\r\n\r\n<p>Juve sensed the fear in their opponents and looked for a quick second as Joao Cancelo burst unchallenged into the area and then tested United De Gea with a fierce drive.</p>\r\n\r\n<p>It was a busy opening half for the Spanish keeper -- Ronaldo struck a swerving free-kick straight at De Gea, who then did well to keep out the follow-up effort from Blaise Matuidi.</p>\r\n\r\n<p>The halftime statistics showed a remarkable dominance for a visiting side at Old Trafford with Juve enjoying 67 percent of possession and double the amount of passes.</p>\r\n\r\n<p>Ronaldo, operating in a free role, roaming wide when he felt it would be fruitful, brought another fine save from De Gea seven minutes after the interval with a thundering shot after being set up by Cuadrado.</p>\r\n\r\n<p>United&#39;s effort could not be faulted, however much guile and penetration they lacked, and they could have drawn level in the 75th minute when Paul Pogba, facing his former club, struck the post with a left foot shot from outside the box. At the final whistle, another fan tried to greet Ronaldo and came up against security officers but the Portuguese insisted on taking a photograph with the interloper and left the field to the applause of both sets of fans.</p>\r\n\r\n<p>Once again, United fans were left with a reminder of their glorious past in the shape of their old boy Ronaldo. It was their only consolation after a game in which their current weaknesses were so comprehensively exposed.</p>', 'blog-images/ronaldo.jpg', 1, 24, '2018-10-28 13:00:31', '2018-11-04 14:14:07'),
(35, 11, 'Imrul Kayes’ 144 fires Bangladesh to 28-run ODI win over Zimbabwe', 'The win at the Mirpur Sher-e-Bangla National Cricket Stadium in Dhaka on Sunday has given the hosts a 1-0 lead in the three-match series.', '<p>The win at the Mirpur Sher-e-Bangla National Cricket Stadium in Dhaka on Sunday has given the hosts a 1-0 lead in the three-match series.</p>\r\n\r\n<p>Promoted to open, Imrul Kayes rescued Bangladesh from a deep trouble to put a challenging 271 for 8 on the board.</p>\r\n\r\n<p>Zimbabwe kept losing wickets regularly in their chase and the innings stopped dead at 243 with spinners Mehidy Hasan Miraz and Nazmul Islam being the wreckers-in-chief.</p>\r\n\r\n<p>The Africans began in a steady fashion and were 47 without loss in seven overs before Mustafizur Rahman drew the first blood by bowling out opener Cephas Zhuwao (35).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Photo: ICC\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/21/mustafiz.jpg1/ALTERNATES/w640/Mustafiz.jpg\" style=\"width:640px\" />&nbsp;</p>\r\n\r\n<p>Photo: ICC</p>\r\n\r\n<p>Visiting captain Hamilton Masakadza hurt his team&rsquo;s chances when he ran himself out trying to take a second run which was not there.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nazmul dashed Zimbabwe&#39;s biggest hopes by sending back Brendan Taylor and Sikandar Raza with two great deliveries that turned sharply from them before crashing into their off-stump.</p>\r\n\r\n<p>With the asking rate climbing over 8, Miraz snared the wickets of the next three batsmen who looked to play a big innings.</p>\r\n\r\n<p>He bowled Craig Ervine (24) and trapped Peter Moor (26) lbw.</p>\r\n\r\n<p>He then caught Brandon Mavuta (20) off his own bowling and reduced Zimbabwe to 169 for eight at the end of the 40th over.</p>\r\n\r\n<p>The game looked done and dusted but a defiant 67-run stand between Sean Williams and Kyle Jarvis for the ninth wicket delayed the inevitable.</p>\r\n\r\n<p>Williams&rsquo; unbeaten 50 off 58 balls was the topscore for his team. Jarvis smashed two sixes and three fours in a 37-run cameo to make sure Zimbabwe did not lose all their wickets.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Photo: ICC\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/21/imrul.jpg1/ALTERNATES/w640/Imrul.jpg\" style=\"width:640px\" />&nbsp;</p>\r\n\r\n<p>Photo: ICC</p>\r\n\r\n<p>Earlier, Imrul smashed his career-best as well as the second highest by any Bangladeshi batsman by touching Mushfiqur Rahim&rsquo;s 144 against Sri Lanka in the Asia Cup.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Zimbabwe&#39;s Kyle Jarvis and Tendai Chatara rattled Bangladesh batting order with four and three wickets respectively.</p>\r\n\r\n<p>Bangladesh were struggling at 139 for 6 after 30 overs. Then Imrul fashioned a record 127-run seventh wicket partnership with Mohammad Saifuddin to pull the Tigers out of the hole.</p>\r\n\r\n<p>All-rounder Saifuddin scored his first ODI fifty on return.</p>\r\n\r\n<p>Bangladesh&rsquo;s top order failed to shine again, putting the team under pressure from the word go.</p>\r\n\r\n<p>Opener Liton Das, who starred in the Asia Cup final against India, gave away his wicket for four in the first delivery by Chatara in the sixth over after getting life twice &ndash; one from a catch and the other a run-out chance.&nbsp;</p>\r\n\r\n<p>Debutant Fazle Mahmud Rabbi, who got the big break of batting first down after playing domestic cricket for 15 long years, departed for a duck after Taylor took a one-handed catch in the last ball of the over. His wicket left Bangladesh tottering at 17 for 2.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/21/imrul-03.jpg/ALTERNATES/w640/Imrul-03.jpg\" style=\"width:640px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Imrul, who was hurriedly called in halfway through the Asia Cup and batted in the middle order and one down, vindicated his promotion up the batting order.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>He tried to build the innings with Mushfiqur on the other end, but Mushfiqur (15) did not last long.</p>\r\n\r\n<p>However, Imrul steadied the Tigers with Mohammad Mithun and the pair put the Zimbabwean spinners under pressure by hitting them for five sixes.</p>\r\n\r\n<p>When Jarvis was put back in the attack, he tore through the middle order with a devastating spell.</p>\r\n\r\n<p>He took out Mithun (37) to end the 71-run stand and also claimed the scalps of Mahmudullah and Miraz as the hosts lost the three wickets for only two runs.</p>\r\n\r\n<p>Bangladesh slipped to 139 for 6 after 30 overs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/21/imrul-saif.jpg/ALTERNATES/w640/Imrul-Saif.jpg\" style=\"width:640px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Imrul and Saifuddin then went about rebuilding the innings.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Imrul took 118 balls to score his third ODI century with three sixes and hit three more after the ton before being out in the 49th over.</p>\r\n\r\n<p>Saifuddin returned after his fifty and taking Bangladesh to the comfortable total.</p>', 'blog-images/Imrul-04.jpg', 1, 84, '2018-10-28 13:02:59', '2018-11-04 14:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `blog_twos`
--

CREATE TABLE `blog_twos` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_two_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_two_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_two_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_two_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `hit_count_two` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_twos`
--

INSERT INTO `blog_twos` (`id`, `category_id`, `blog_two_title`, `blog_two_short_description`, `blog_two_long_description`, `blog_two_image`, `publication_status`, `hit_count_two`, `created_at`, `updated_at`) VALUES
(9, 18, 'SC to rule on trial in Khaleda’s absence Monday', 'A seven-member appellate panel led by the chief justice set Monday for the decision after hearing a petition against the High Court order ....', '<p>A seven-member appellate panel led by the chief justice set Monday for the decision after hearing a petition against the High Court order to proceed with the trial on Sunday.</p>\r\n\r\n<p>AJ Mohammad Ali represented Khaleda&rsquo;s petitioners, accompanied by Zainul Abedin, Mahbub Uddin Khokon, Kaisar Kamal and AKM Ehsanur Rahman. Attorney General Mahbubey Alam represented the state, while Khurshid Alam Khan represented the Anti-Corruption Commission.</p>\r\n\r\n<p>The Dhaka Special Judge&rsquo;s Court-5 is set to announce the verdict in the case on Monday. Khaleda may receive a jail sentence of up to seven years if she is found guilty of embezzling Tk 31.54 million.</p>\r\n\r\n<p>&ldquo;Whether the trial court will deliver its verdict tomorrow depends on the Supreme Court&rsquo;s decision,&rdquo; Zainul Abedin told the media after the Supreme Court hearing.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"File Photo\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/07/25/khaleda-zia-bangabandhu-sheikh-mujib-medical-university-070418-0010.jpg/ALTERNATES/w300/Khaleda-Zia-Bangabandhu-Sheikh-Mujib-Medical-University-070418-0010.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>File Photo</p>\r\n\r\n<p>ACC lawyer Khurshid Alam Khan said he expects the petition to be dismissed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Asked whether the trial court will delay the verdict for the Supreme Court&rsquo;s decision, he said: &ldquo;Whether the verdict can be announced tomorrow is a matter for the trial court to decide.&rdquo;</p>\r\n\r\n<p>The ACC had filed the corruption case with Tejgaon Police Station in 2010, accusing Khaleda and three others of embezzling Tk 31.54 million from the Zia Charitable Trust.</p>\r\n\r\n<p>The BNP chief was sent to jail on Feb 8, when a special court sentenced her to five years in prison for corruption in the Zia Orphanage Trust graft case. She was then transferred to the abandoned jailhouse on Old Dhaka&rsquo;s Nazimuddin Road.</p>\r\n\r\n<p>The trial was shifted to a makeshift court inside the jailhouse after Khaleda refused to attend the trial hearings, citing her &lsquo;illness&rsquo;. The BNP chief then refused to appear in court at the jailhouse.</p>\r\n\r\n<p>Dhaka Special Judge Md Akhtaruzzaman decided on Sept 20 that the trial could proceed in the absence of Khaleda because she was refusing to appear in court &lsquo;of her own volition&rsquo;. Khaleda&rsquo;s lawyers challenged the decision with a revision petition to the High Court.</p>\r\n\r\n<p>On Oct 14, the High Court scrapped the revision petition, clearing the way for the trial to proceed.</p>\r\n\r\n<p>Khaleda&rsquo;s lawyers then petitioned the Supreme Court to appeal the High Court decision. The hearing concluded on Sunday.</p>', 'blog-images/High-court-supreme-court.jpg', 1, 17, '2018-10-28 03:34:52', '2018-10-28 08:10:36'),
(10, 21, 'My rude awakening – road transport day', 'Early in the morning on Oct 22, 2018, when I was shaving, the phone rang three times in quick succession. Thinking that there must be ...', '<p>Early in the morning on Oct 22, 2018, when I was shaving, the phone rang three times in quick succession. Thinking that there must be some sort of emergency, I was ready for the fourth time. A torrent of anger reached me over the phone. &ldquo;What sort of a Bangladeshi friend are you?&rdquo; &ldquo;You can only go on and on writing about 1971.&rdquo; &ldquo;Why don&rsquo;t you live in the present-2018?&rdquo; &ldquo;Don&rsquo;t you know that today is National Road Safety Day?&rdquo; &ldquo;Give us some advice. Write about road safety.&rdquo;</p>\r\n\r\n<p>Having driven landrovers, jeeps, Toyota Sprinters and motorbikes in Bangladesh and India over the last 50 years, I suppose that I should have something to say, although I am certainly not a road safety expert.</p>\r\n\r\n<p>The first thing to say is that very few drivers in Bangladesh have been trained by qualified trainers about how to drive and many persons who have full driving licences have actually never taken the driving test. Driving licences can be &lsquo;bought&rsquo; as can the annual &lsquo;fitness&rsquo; tests for vehicles. It is no surprise at all that there are so many accidents. There are thousands of vehicles that are &lsquo;unfit&rsquo; as any or all of their tyres, steering, brakes and lights are defective.</p>\r\n\r\n<p>Often, the public are told to cross the roads using the &lsquo;zebra crossings&rsquo;. However, there are no flashing beacons and neither drivers nor pedestrians are aware of the Highway Code rule that says that pedestrians at a zebra crossing have the right of way and that vehicles should stop to allow pedestrians to cross.</p>\r\n\r\n<p>In addition, pedestrians seem to have no idea about road safety. Safety on the roads and pavements need to taught from a very young age and adults should set an example. Regularly it can be seen that people are crossing a very busy road when there is an over bridge a few metres away. Quite unbelievable! While many drivers of all kinds of vehicles can be seen driving while talking on mobile phones, pedestrians are equally guilty while crossing roads. Also, where there are pavements for pedestrians to use, motorbike drivers seem to think that they have a &lsquo;right of way&rsquo; on the pavements too!</p>', 'blog-images/risky-road-crossing-soniakra-aam-07082018-0006-1024x660.jpg', 1, 3, '2018-10-28 03:37:52', '2018-10-28 06:05:48'),
(11, 11, 'Soumya, Kayes tons propel Bangladesh to sweep Zimbabwe series with 7-wicket win', 'Kayes continued his dazzling form in the series while Soumya made a comeback', '<p>Kayes continued his dazzling form in the series while Soumya made a comeback in style to put record 220 off 180 for the second wicket at Zahur Ahmed Chowdhury Stadium in Chattogram on Friday.</p>\r\n\r\n<p>Mushfiqur Rahim made sure the Tigers do not lose the way with 28 off 39, finishing with a six when his side needed five runs to overhaul Zimbabwe&rsquo;s 286 with 48 balls in hand.&nbsp;</p>\r\n\r\n<p>In the chase of 287, the Tigers lost opener Liton Das in the very fast delivery of their innings, raising fears of a batting debacle.</p>\r\n\r\n<p>Liton, whose 83 in a tremendous opening stand with Kayes earned Bangladesh a comfortable win in the second match, was trapped leg before by Kyle Jarvis.</p>\r\n\r\n<p>The batsman challenged the decision in vain, slightly hurting his chances of getting a permanent spot in the team as Tamim Iqbal&rsquo;s opening partner.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/soumya-imrul.jpg2/ALTERNATES/w300/Soumya-Imrul.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/soumya-imrul.jpg1/ALTERNATES/w300/Soumya-Imrul.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kayes, aided by Soumya at the other end, then started finding the boundary at regular intervals in the powerplay.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Soumya followed up after the 20th over, when Bangladesh&rsquo;s score was 130, taking 63 quick runs in the next 10 overs.</p>\r\n\r\n<p>He finally completed his comeback with 117 off 92, hitting nine boundaries and six sixes.</p>\r\n\r\n<p>Selectors also breathed a sigh of relief as it was his second ODI century in his 35th match after the first one in the 10th in April 2015.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/imrul-100.jpg/ALTERNATES/w300/Imrul-100.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/soumya-100.jpg/ALTERNATES/w300/Soumya-100.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kayes started the series with a brilliant 144, but missed the century by 10 runs in the second match.&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In the last match, Kayes achieved another landmark &ndash; he scored the most runs among Bangladeshi batsmen in a bilateral series.</p>\r\n\r\n<p>His 115 off 112 with 10 fours and two sixes on Friday took his tally in the series to 349. Tamim had the record earlier with 312 in the series against Pakistan in 2015.</p>\r\n\r\n<p>Earlier, Sean Williams emerged as the hero as he helped his team post their highest total of the series with an unbeaten career best 129 after they had lost openers Cephas Zhuwao and Hamilton Masakadza in the first three overs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/willams-100.jpg/ALTERNATES/w300/Willams-100.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Williams was supported in the rescue act by Brandon Taylor, who had scored the same number of runs - 75 - in the second match.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Mohammad Saifuddin and Abu Hider Rony&rsquo;s inclusion in the playing eleven was proved the right decision as the youngsters shook Zimbabwe by taking the wickets of Zhuwao and Masakadza respectively.</p>\r\n\r\n<p>The tourists failed to score a single run off 22 consecutive deliveries in the first five overs.&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/zhuwao-out.jpg/ALTERNATES/w300/Zhuwao-Out.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://d30fl32nd2baj9.cloudfront.net/media/2018/10/26/masakadza.jpg/ALTERNATES/w300/Masakadza.jpg\" style=\"width:300px\" />&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>But Williams changed the complexion of the innings by taking the attack to the Bangladesh bowlers. He hit two fours in an over by Saifuddin which encouraged Taylor to join in the act.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>As the other pacers could not follow up on Saifuddin and Rony&rsquo;s success, skipper Mashrafe Bin Mortaza brought Nazmul Islam Apu to the attack, but the spinner gave away 21 runs in his first three overs.</p>\r\n\r\n<p>By the time he broke the 132-run partnership between Williams and Taylor, Zimbabwe were already on the front foot.&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>After Taylor threw away his wicket again sweeping Nazmul outside off and getting caught by wicketkeeper Mushfiqur, Sikandar Raza came to the crease. He immediately made his intentions clear with a six.</p>\r\n\r\n<p>Raza&rsquo;s 84-run stand with Williams took Zimbabwe past the 42nd over. Raza, who scored 49 in the second match, however, missed another half century, this time by 10 runs.</p>\r\n\r\n<p>Trying to smash Nazmul for a maximum as overs were wearing out, Raza was caught at the boundary.</p>\r\n\r\n<p>Zimbabwe, however, managed another partnership. Peter Moor hit two sixes in two consecutive deliveries by Mashrafe for his 28 off 21. His 62-run stand with Williams helped Zimbabwe throw a strong challenge, which Bangladesh overcame to complete their 12th ODI series sweep.</p>\r\n\r\n<p>&nbsp;</p>', 'blog-images/Bangladesh-Win.jpg', 1, 5, '2018-10-28 08:00:43', '2018-10-28 08:10:11'),
(12, 11, 'Windies all-rounder Bravo announces international retirement', 'The 35-year-old Trinidadian, who made his West Indies debut in 2004, played 40 Tests, 164 one-day internationals and 66 T20 internationals...', '<p>The 35-year-old Trinidadian, who made his West Indies debut in 2004, played 40 Tests, 164 one-day internationals and 66 T20 internationals.</p>\r\n\r\n<p>His last appearance for his country came in the shortest format against Pakistan in Sept 2016.</p>\r\n\r\n<p>&quot;Today I want to confirm to the cricket world that I have officially retired from international cricket in all formats of the game,&quot; he said in a statement.</p>\r\n\r\n<p>&quot;After 14 years when I made my debut for the West Indies, I still remember that moment I received the maroon cap before walking onto the Lords Cricket Ground against England in July 2004. The enthusiasm and passion I felt then, I have kept with me throughout my career.</p>\r\n\r\n<p>&quot;However, I must accept that for me to preserve my longevity as a professional cricketer, I must do as others before have done, leave the international arena for the next generation of players.&quot;</p>\r\n\r\n<p>Bravo, known for his big-hitting ability and a wide range of slower deliveries, ends his international stint with 2,200 runs at an average of 31.42 in Tests.</p>\r\n\r\n<p>In ODIs, he finished with 2,968 runs at 25.36, while claiming 199 wickets at an economy rate of 5.41.</p>\r\n\r\n<p>Bravo plays for the Chennai Super Kings franchise in the Indian Premier League and has also represented T20 outfits in England, Australia, Pakistan, Bangladesh and the Caribbean.</p>\r\n\r\n<p>&quot;I am extremely fortunate to have a career that has taken me across the globe into the most prestigious dressing rooms sharing experiences with all the recent legends of this glorious game,&quot; he said.</p>', 'blog-images/bravo.jpg', 1, 1, '2018-10-28 08:02:39', '2018-10-28 08:10:28'),
(13, 21, 'Workers’ leader says transport strike will continue until meeting with govt', 'Bangladesh Road Transport Workers’ Federation General Secretary Osman Ali’s comments came on Sunday in reaction ...', '<p>Bangladesh Road Transport Workers&rsquo; Federation General Secretary Osman Ali&rsquo;s comments came on Sunday in reaction to Road Transport and Bridges Minister Obaidul Quader&rsquo;s remarks that it would not be possible to meet the workers&rsquo; demands before the general elections.<br />\r\n<br />\r\nQuader told reporters at a programme in the afternoon that the protesters must wait until the next parliament session and urged them to halt their strike as public sufferings on the roads mounted across Bangladesh.<br />\r\n<br />\r\nLater in the day, Osman told&nbsp;<a href=\"http://bdnews24.com/\">bdnews24.com</a>&nbsp;they had written to the ministry outlining their demands a month ago, but have not heard from the government. &nbsp; &nbsp;<br />\r\n<br />\r\n&ldquo;Are we haters of the Awami League? Didn&rsquo;t we prevent the opposition blockades in 2013 and 2014?&rdquo; he asked.&nbsp;<br />\r\n<br />\r\n&ldquo;We have no dispute with anyone. Our strike will continue until a meeting with them (ministry),&rdquo; the transporters&rsquo; leader said.</p>', 'blog-images/transport-strike-saidabad-aam-27102018-0016.jpg', 1, 2, '2018-10-28 08:04:31', '2018-10-28 08:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `breakings`
--

CREATE TABLE `breakings` (
  `id` int(10) UNSIGNED NOT NULL,
  `add_breaking_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakings`
--

INSERT INTO `breakings` (`id`, `add_breaking_news`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Shamsher Mobin  joins Bikalpadhara', 1, '2018-10-26 05:44:03', '2018-10-26 20:43:11'),
(3, 'Tigers sweep series', 1, '2018-10-26 05:45:31', '2018-10-26 20:43:55'),
(4, '10 killed in Panchagarh road crash', 1, '2018-10-26 05:46:11', '2018-10-26 21:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(11, 'Sports', 'tamim', 1, '2018-10-16 09:36:49', '2018-10-16 09:36:49'),
(13, 'Education', 'Bd', 1, '2018-10-18 12:12:21', '2018-10-18 12:12:21'),
(15, 'Entertainment', 'Bd', 1, '2018-10-20 13:20:53', '2018-10-20 13:20:53'),
(16, 'International', 'External', 1, '2018-10-20 13:21:25', '2018-10-20 13:21:25'),
(17, 'Politics', 'Bangladesh', 1, '2018-10-24 05:18:42', '2018-10-24 05:18:42'),
(18, 'Villages', 'Bangladesh', 1, '2018-10-24 05:19:11', '2018-10-24 05:19:11'),
(19, 'Economics', 'World wide', 1, '2018-10-24 05:20:09', '2018-10-24 05:20:09'),
(20, 'Science', 'World wide', 1, '2018-10-24 05:20:34', '2018-10-24 05:20:34'),
(21, 'Bangladesh', 'Bangladesh', 1, '2018-10-24 05:22:05', '2018-10-24 05:22:05');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `visitor_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image1` int(150) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Saiful', 'admin@project.com', 'hello', '2018-10-24 22:28:26', '2018-10-24 22:28:26'),
(5, 'pabel', 'bondhupabel@gmail.com', 'khub valo', '2018-10-24 22:30:39', '2018-10-24 22:30:39'),
(6, 'pabel', 'm_pabel@ymail.com', 'kmn achen sobay', '2018-10-24 22:48:09', '2018-10-24 22:48:09'),
(7, 'Saiful', 'bondhupabel@gmail.com', 'eta valo', '2018-10-24 22:49:19', '2018-10-24 22:49:19'),
(8, 'pabel', 'foysalahmmed73@gmail.com', 'last', '2018-10-24 22:58:12', '2018-10-24 22:58:12'),
(9, 'Saiful', 'hmpabel54@gmail.com', 'Bangladesh', '2018-10-24 22:59:06', '2018-10-24 22:59:06'),
(10, 'Saiful', 'bondhupabel@gmail.com', 'Saiful islam shahin', '2018-10-24 22:59:41', '2018-10-24 22:59:41'),
(11, 'raju', 'bondhupabel@gmail.com', 'final', '2018-10-24 23:24:08', '2018-10-24 23:24:08'),
(12, 'pabel', 'admin@gmail.com', 'Hello Bangladesh', '2018-10-25 10:04:46', '2018-10-25 10:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `internationals`
--

CREATE TABLE `internationals` (
  `id` int(10) UNSIGNED NOT NULL,
  `add_international_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internationals`
--

INSERT INTO `internationals` (`id`, `add_international_news`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Google fired 48 for sexual harassment: CEO', 1, '2018-10-26 05:50:55', '2018-10-26 20:46:22'),
(2, 'Foreigners sell $1.1bn of Saudi stocks', 1, '2018-10-26 20:47:03', '2018-10-26 20:47:03'),
(3, 'EU to sign trade deal with Singapore', 1, '2018-10-26 20:47:31', '2018-10-26 20:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_13_144056_create_categories_table', 2),
(4, '2018_10_14_110439_create_blog_ones_table', 3),
(5, '2018_10_14_113900_create_blog_twos_table', 3),
(6, '2018_10_21_215341_create_visitors_table', 4),
(7, '2018_10_22_214245_create_comments_table', 5),
(8, '2018_10_22_215047_create_comments_table', 6),
(9, '2018_10_24_200049_create_contacts_table', 7),
(10, '2018_10_25_182939_create_others_table', 8),
(11, '2018_10_26_112209_create_breakings_table', 9),
(12, '2018_10_26_112841_create_internationals_table', 10),
(13, '2018_11_03_182227_create_memberships_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `full_name`, `address`, `subject`, `title`, `image`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Pabel', 'Mohammadpur', 'Politics', 'Bangladesh', 'written-image/a.jpg', 'BangladeshBangladesh Bangladesh Bangladesh BangladeshBangladesh Bangladesh Bangladesh BangladeshBangladesh Bangladesh Bangladesh BangladeshBangladesh Bangladesh Bangladesh', 1, '2018-10-25 22:12:20', '2018-10-25 23:21:59'),
(2, 'Abdur Rahim', 'Mirpur', 'Bangladesh', 'Bangladesh', 'written-image/Gazipur-AL-Leader.jpg', 'Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh', 1, '2018-10-25 22:16:19', '2018-10-26 21:03:50'),
(4, 'Forhad', 'Mohammadpur', 'Other', 'Bangladesh', 'written-image/45000680_2239383582966083_7215278369875689472_o.jpg', 'BangladeshBangladesh BangladeshBangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh BangladeshBangladesh BangladeshBangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh BangladeshBangladesh BangladeshBangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh Bangladesh', 1, '2018-10-29 00:03:37', '2018-11-03 14:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pabel', 'admin@gmail.com', NULL, '$2y$10$.eCIYh3HbXxso4.j234tUuUiXO/xL1UpN3vjp6R2sBXfUGzy2gzNO', 'Vgv4UQPOgsUS90yzJEAtwiKg0QhXQkV7Xd3b7EJeFvgXf6mkf98shTsSFxGn', '2018-10-06 23:25:14', '2018-10-06 23:25:14'),
(2, 'Bondhu', 'bondhupabel@gmail.com', NULL, '$2y$10$.mlZl7dTy6CGYNpZcBUDsOMGR.eCCtYFiG/ekhh8rh00Wys9Qio4i', 'PY4xf2EGTPsKRWroHSjHTSZaQvqKNc5nOE5Iwo2JkRNneV2w6MtkUHWh7z9i', '2018-10-26 23:05:03', '2018-10-26 23:05:03'),
(5, 'Hanif', 'hmpabel54@gmail.com', NULL, '$2y$10$QPt4WB9zR..jZn1K5Fv5BOrTDlRLKXXAc2Pq2846JZsJ92nCm416K', 'icWHoFBHKxDy6VTqfsqnb0NzHLvvJJN25HbutqWJetmyRHUv5YSMs9KwTuuJ', '2018-10-28 01:08:01', '2018-10-28 01:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Foysal', 'Mahmud', 'bondhupabel@gmail.com', '$2y$10$aA1BwrDh/JxBf5OZcT8JbOSKuRsydbOoIfGCFLTE9xyo.5jh26g4K', '01823710688', 'blog-images/a.jpg', '2018-10-21 16:12:55', '2018-10-21 16:12:55'),
(12, 'Shamim', 'Hossain', 'shamimhcp@gmail.com', '$2y$10$pTN9Ww5lD7rF2f/w7FEsg.OLrKxVMAjfzu8aRWxyBsrOT2faMqODu', '123456', 'upload/visitor-image/Gazipur-AL-Leader.jpg', '2018-10-25 04:36:55', '2018-10-25 04:36:55'),
(13, 'Foysal', 'Mahmud', 'hmpabel54@gmail.com', '$2y$10$ixfSOBsZSLJmwj2ylSFhH.YPv.HWq1ZLHIAi/SnSPh4sIWHO/8EYi', '01823710688', NULL, '2018-10-25 04:48:28', '2018-10-25 04:48:28'),
(14, 'Bondhu', 'Pabel', 'hanifmiapabel@gmail.com', '$2y$10$YGVlUpXGWFOP1eXapbsrO.oNENnmsKOp/.VEIuJJtsS6F8J0hlKW2', '01823710688', 'upload/visitor-image/a.jpg', '2018-10-25 10:57:06', '2018-10-25 10:57:06'),
(15, 'Foysal', 'Mahmud', 'aman@gmail.com', '$2y$10$Ot3MTYvyTyI1v5aa.z5DG.So3KhJIgp/Zqf63I/4bNkMVbYLes/1q', '01823710688', NULL, '2018-11-04 13:35:32', '2018-11-04 13:35:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_ones`
--
ALTER TABLE `blog_ones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_twos`
--
ALTER TABLE `blog_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakings`
--
ALTER TABLE `breakings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internationals`
--
ALTER TABLE `internationals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_ones`
--
ALTER TABLE `blog_ones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `blog_twos`
--
ALTER TABLE `blog_twos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `breakings`
--
ALTER TABLE `breakings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `internationals`
--
ALTER TABLE `internationals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
