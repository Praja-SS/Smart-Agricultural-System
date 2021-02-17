-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 02:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ares`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(11) NOT NULL,
  `article_type` varchar(10) NOT NULL DEFAULT 'Blog',
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `img4` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `article_type`, `title`, `description`, `img1`, `img2`, `img3`, `img4`, `status`) VALUES
(3, 'Blog', 'Raise agriculture productivity', 'The Challenge of Sustainable Agriculture\r\n\r\nThe world needs to produce at least 50% more food by 2050 to feed a projected 9 billion people. To help meet this goal, the Bank is working with countries to boost the productivity of farms, livestock and fisheries. \r\n\r\nThis challenge must be met against a backdrop of food price volatility and over-stretched resources, when there is less water and uncultivated land for farming and livestock, and wild capture fishery stocks are decreasing. Agriculture is also more vulnerable to climate change than any other sector: Droughts, floods and warmer temperatures reduce crop yields, and it is estimated that for every 1Â°C of global warming, grain yields will decline by 5 percent.\r\n\r\nTo raise yields sustainably, the Bank supports Climate-Smart approaches that have potential to increase productivity, enhance resilience, and lower our footprint; promotes agricultural innovation through research and education; and facilitates responsible agricultural investment.\r\n\r\nMore Crops, Livestock and Seafood\r\n\r\nThe Bank promotes innovative approaches that can help smallholders get the most out of their farms and fisheries. Gender-specific interventions are key in this area, since women account for the majority of small holder farmersâ€”up to 70% in Africa alone.\r\n\r\nThe Bank is committed to agricultural innovations that boost productivity, as well as better land and water managementâ€”US$ 1 billion was spent on irrigation and drainage in FY 2010â€“12. Watershed-management improved crop yields by up to 20 percent for Karnatakaâ€™s beneficiary farmers and higher-yielding seed varieties were piloted on selected farms in Uganda.\r\n\r\nThe Bank also promotes the use of new breeds, animal nutrition, veterinary services, vaccinations and improved husbandry, rangeland and pasture management to sustainably increase livestock productivity for about 1 billion people who depend on livestock for their livelihoods. The Bankâ€™s work on breeding and animal nutrition in India has improved the productivity of milk-giving animals. Adopting different breeds helped Assamâ€™s farmers grow their milk yields by 65 percent while better grassland management doubled the incomes of herders in Chinaâ€™s Gansu and Xinjiang regions. The Bank also supports sustainable aquaculture at coastal fisheries in Tanzania and Vietnam.\r\n\r\nThe Bank fosters long-term agricultural productivity by increasing lending to research and advisory services, as well as training farmers to apply scientific research and new knowledge to agricultural practices.\r\n\r\nSupporting an Environment that Enables Productivity\r\n\r\nThe Bank is committed to building an environment that connects farmers and fishers to the resources they need to grow their livelihoods.\r\n\r\nThis includes expanding access to financial services in countries such as Honduras so that capital can be more easily secured, using information and communications technology to improve efficiency and resolve challenges, and supporting a consumer-friendly market for fertilizers, machinery, micro-irrigation and other productivity-boosting tools.\r\n\r\nBeneficiaries include farmers in Mali who can now go to banks to seek financial products that are customized to their needs.\r\n\r\nLimited and mis-targeted public spending can constrain agricultureâ€™s potential to spur growth and reduce poverty. This is why the Bank has worked with countries such as Ethiopia, Nepal and Uganda to analyze the impacts and priorities of public spending on agriculture. With support from the Bill and Melinda Gates Foundation and the Comprehensive Africa Agriculture Development Programme (CAADP), the Bank is helping Sub-Saharan African countries conduct agriculture public expenditure analyses so that their governments can make better decisions on resource allocation for agriculture development.\r\n\r\nImproving Governance of Land Tenure\r\n\r\nImproved land governance can help smallholder farmers increase the productivity of their land and improve their livelihoods. The Bank supports government policies that implement systematic land surveying and titling programs that recognize all forms of land tenure.\r\n\r\nThe effective governance and use of land is important to job creation, food security, disaster risk management and mitigating the impact of climate change. Responsible private investment coupled with secure land tenure makes rural communities stronger, improves rural living conditions and boosts investment in and the efficiency of smallholder agriculture.\r\n\r\nSustainable Landscape Approaches and Climate Smart Agriculture\r\n\r\nIt is increasingly clear that agriculture, water, forests, and food security are all connected and that we need to work across all these areas to find integrated development solutions. Landscape approaches promote the sustainable and integrated use and conservation of natural resources in an equitable manner. A holistic approach in Karnataka employed watersheds to help raise water tables, brought degraded lands under cultivation, enabled farmers to diversify into higher value crops and horticulture, and raised agricultural productivity, all while improving equity between landed farmers, the landless, and women.\r\n\r\nThe Bank advocates for climate-smart agriculture, with its three core goals that together point towards a â€œtriple winâ€: increasing productivity and incomes, building resilience while reducing vulnerability, and lowering our environmental footprint.\r\n\r\n', 'ap.jpg', '', '', '', 'active'),
(4, 'Blog', 'Modern Farming', 'Kurwa Nyaroche is among of the farmers at Guta village, Bunda District, Mara Region, who is seeing a big difference in his agricultural productivity after received a support from Millenium Development Acceleration framework (MAF) project to adapt on the new ways of farming.\r\n\r\n \'I used to grow cassava in previous years and harvest very little because cassava in our area is  very vulnerable to disease and poor farming methods .But now we have learnt that even sunflower can grow well in our area.â€™â€™ He continues. â€˜â€™I have grown it in first season and harvested 5 bags. Now I am waiting to harvest the second season which I am sure to get more than this. says Kurwa\r\n\r\nNyaroche and other farmers in 19 villages in Bunda District has been facilitated by the project  with  support from UNDP to form productive groups for  better and easy information delivery and accessing technical assistance from the agricultural extension practitioners. They have also been provided with technical agricultural advices and inputs like certified seeds free of charge.\r\n\r\n\'Normally agricultural extension officer from the district visit us and provide education about farming methods that will help to improve  our  crops yields  and enable us  to   improve marketing of our  produce\'. Explained another farmer\r\nAfter project intervention, many farmers in project villages have formed demonstration farms, and shifted from cassava and cotton growing to sunflower and paddy growing and adopted different sustainable and modern agricultural practices eg use modern inputs seeds and fertilizers.\r\n\r\n\'Sunflower farming will help us to earn a good income because it has value. Through selling sunflower oil we will be able to get a lot of money.â€™â€™commented kurwa\r\n\r\n However the project has managed to establish agricultural information resource center in Bunda town which has helped raising awareness to farmers through agricultural films which incorporate the best farming practices by demonstrations.\r\n\r\nThrough implementation of activities, the project has managed effectively to create a functioning link between the districts Agricultural extension officers and farmers in the district which helps to improve agricultural performance.\r\n\r\nThe project has also built financial capacity of two Savings and Credit Cooperative Societies (SACCOS) by providing them with grants to enable them to extend financial services to more clients who are interested with modern agriculture. These include Kibara Biashara Savings and Credit Cooperative Societies (Tsh10, 000,000) and Mugeta SACCOS (Tsh 5,000,000).This has enabled farmers to access agricultural credits at affordable rate of interest.\r\n\r\n MAF Projects are community service oriented projects aiming to accelerate the implementation of MDG1 on reducing extreme poverty and hunger with a great emphasis on agriculture (sunflower and paddy farming) fish farming and poultry keeping.', 'mf.jpg', '', '', '', 'active'),
(5, 'Blog', 'Agriculture Methods', 'Improvement of agricultural methods and productivity to reduce the need to cut down additional forest land. Tropical forests cannot be maintained unless agricultural productivity is greatly improved. However, to feed the projected population of the mid-21st century even at present levels, not to mention a level approaching that of developed countries, agricultural efficiencies would have to be far greater than is currently the case in most countries. We need increases in agricultural productivity of between 1.8% and 3% per year for many years. The average annual growth rate of agricultural productivity in Sub-Saharan Africa between 1991 and 1995 was 2.4%, which must be maintained to prevent a decline in nutritional levels as populations grow (Musters, de Graaf, & ter Keurs, 2000). To provide levels of nutrition equivalent to more developed countries, still higher production growth rates will be necessary. This can occur only if technologies are greatly improved and substantial financial support is provided by wealthier countries. Without such development, conservation strategies are doomed merely by arithmetic.\r\n\r\nIt is argued that, with proper techniques, including irrigation, sustainable agriculture can be established on former rainforest soils (soybeans in the Brazilian Amazon, for example). Of course, sugar has been raised in the Caribbean and rice has been successfully cropped for thousands of years in Southeast Asia on tropical forest soils. This type of agriculture is possible where soils are fertile, as in the regions of Indonesia which have rich volcanic soils. But elsewhere, as in East Java, only the most marginal agriculture (raising tapioca and other low-nutrient tubers) is possible, and these areas are extremely poor. Some nonvolcanic rainforest areas lie on reasonably fertile soils (especially in deltas) and can sometimes sustain appropriate crops. Recently, archeologists have discovered the remains of ancient agricultural systems in the Beni region of Bolivia. These artefacts lie in seasonally-flooded savannas which have long been thought to be useful only for cattle ranching. However, the many raised agricultural fields, fish ponds and other agricultural constructions indicate that these areas have been productive in the past. Recently, the construction of similar raised fields in savanna areas in Bolivia has permitted the cultivation of tubers, maize, and manioc (Mann, 2000). If more of these areas could be converted to productive agriculture, they could provide a source of land as an alternative to rainforest removal. Often, however, governments encourage and indeed, almost coerce the development of unsuitable agricultural products, although they should not attempt to introduce non-native species and unsuitable crops or domestic animals into forest areas. For example, the Peruvian government has aggressively promoted the introduction of rice cultivation and water buffalo husbandry into many areas of the Amazon rainforest. In most places, rice is a most unsuitable cultivar, and water buffalo have caused serious erosion of riverbanks and destruction of vegetation.\r\n\r\nTo improve agricultural productivity, a number of things must be accomplished:\r\n\r\na. Reduction of the present rate of degradation and loss of productive farmland due to erosion, salinization, waterlogging, and nutrient depletion: Technologies for these purposes are available, but are little used because of the expense. However, many non-technological methods have been used for years by farmers (contour plowing, abandonment of marginal agricultural lands, planting of wind barriers, fallowing). Erosion can be prevented by the careful selection of appropriate crops, keeping ground cover on the soil, and contour plowing. Irrigation increases crop yields by about 200%, so more land must be irrigated to increase production efficiency, but this uses great quantities of water. More efficient methods must be utilized to prevent water shortages, as only 45% of irrigation water is actually absorbed by plants. Drip irrigation and other efficient delivery systems, better water distribution systems, improved control systems, and raising crops suited to the climate and soil will aid in this endeavor. Excessive or continual irrigation leads to salinization and waterlogging of the soil, which will diminish or destroy its agricultural capacity.\r\n\r\nb. Raising the crop yield on current agricultural land, as most land is not producing yields even close to the maximum possible (in part because modern technologies are not used). If the gap between current and potential yield could be bridged, the production of soybeans could be increased by 64%, that of peanuts by 208%, pulses by 472%, and cereals by 170% over a period of several years. The theoretical maximum yield for cereals is 13.4 tons per hectare, but the average cereal yield (1992-1994) was 2.77 tons per hectare â€“ not even close to this figure (Goklany, 1998). There are regional inequities as well. Yields tend to be much lower in the tropical developing countries with large, growing human populations. For instance, in Subsaharan Africa, yields of cereal grains are only one-third of the cereal yield in the northern hemisphere. Increasing yields can raise income for marginal agriculturalists and reduce dependence upon destructive slash-and-burn agricultural methods. This may be done by improving tillage methods to preserve soils and nutrients, which will be more beneficial than removing rain forest to open more agricultural land. Other techniques might include soil testing to determine soil chemistry profiles, crop rotation, nutrient and water management, terracing, instituting appropriate tillage methods for the soil/terrain, crop diversification, and interspersing crops with trees. These methods could reverse the nutrient depletion characteristic of so many cultivated soils in tropical areas. To increase productivity, one must also reduce losses from disease and pests, both during growth periods and after harvest (currently an average of 42% of crop yields is lost to these agents [Goklany, 1998]). Pest and disease-resistant varieties, better storage facilities and improved transportation could help in this, as well as the development of new high-yield crop varieties, suitable to local weather and soil conditions. Except for the â€œgreen revolutionâ€ with rice, less effort has been put into the development and study of tropical crops than temperate ones.\r\n\r\nc. Reforming agricultural practices to be less harmful to forests and forest regeneration: Among these reforms could be reductions in the use of burning, minimizing the use of toxic chemicals, and using swidden land less intensively by increasing fallow times. Zero tillage agriculture should also be utilized. When the soil is left untilled, organic matter is retained, preserving soil fertility and preventing erosion and runoff. Where the soils contain organic matter, forests can often regenerate.\r\n\r\nd. Improving the distribution of agricultural products: Distribution systems are extremely unequal in most tropical countries, and often unreliable. Access to food and other agricultural goods must be increased in terms both of availability (delivery) and affordability.\r\n\r\ne. Reduction of the environmental impacts of new technologies. To diminish environmental impacts, agricultural management systems must be devised which are suitable for specific areas and crops. This would allow reduction in artificial inputs, so that fertilizer and pesticide use could be considerably reduced.\r\n\r\nf. Reformation of policies relating to water management, allocation, and distribution. For instance, governments will frequently subsidize water use for agriculture, reducing incentives for water conservation. That users pay fairly for water is essential (now, frequently, the poor pay more for water than the rich). Many countries have achieved considerable water conservation by this method (Chile, Jordan, India and others), and it could certainly be applied by most tropical countries.\r\n\r\ng. Retention of trees as crops to protect water and soil resources. In southern Malaysia, 60% of the forested area has been kept in forest, while the other lands are used for agricultural purposes (Spears, 1988). How much of this land will remain protected with increasing demand for palm oil and other products is questionable, however.\r\n\r\nh. Development of agroforestry projects: Cash crops might be raised in small-scale agroforestry plots. Such crops as avocados, papayas, peppers, palm fruits, mangos and many other local crops are being raised in this way in the Amazon. According to Spears (1988), the need for industrial wood could be provided by tree plantations of approximately 25 million hectares, about 10% of the remaining forest area, but as of the date of the article, only 2.6 million hectares of such plantations had been established. They could preclude the need to remove virgin forest, particularly if they consist of rapidly-growing species. Such projects can act as alternatives to the expansion of agricultural areas.\r\n\r\ni. Provision of a system of tropical agricultural research stations and, especially, agricultural extension workers and soil experts to assist local farmers. This is absolutely essential for the success of agricultural reform. If farmers donâ€™t know or understand the methods, nothing can be improved.\r\n\r\nj. Provision of governmental guidance and regulation: The â€œgreen revolutionâ€ was successful and widespread only partly because of the dispersal of information to virtually all rice-growers. In addition, some coercive regulation was undertaken by governing bodies â€“ usually local â€“ in some places. In Bali, for instance, water for irrigation is provided only to those farmers who use the new varieties of rice.\r\n\r\nSome of these scenarios require that new technologies be developed, others do not. All of these changes require that economic benefits accrue to farmers to provide them with incentives for using different technologies and methods, and for using them effectively. Economic and scientific aid will be required from international agencies as well as national governmental agencies in order to assure that any changes made are sound, adapted to local conditions, and environmentally safe.', 'sm.jpg', '', '', '', 'active'),
(6, 'Blog', 'IT and Agriculture', 'Present era is an era of Information and Communication Technology (ICT). It is more interactive and can render information as per the need of ultimate users and.\r\nensures the possibility for quick information gathering,\r\nPresent era is an era of Information and Communication Technology (ICT). It is more interactive and can render information as per the need of ultimate users and ensures the possibility for quick information gathering, processing, transmission, preservation and sharing for social, economical and cultural upliftment. The growth of technologies in the field of communication leads to global spread of knowledge and application which leaves multi-dimensional impact on all spheres of human activity by accelerating the process of information exchange and reducing the cost involved in achieving the ultimate objectives at farmers field. The information and communication technology can render technical services in agriculture and allied sectors, weather information, market information, global information regarding agriculture, state and central agricultural schemes formed for the welfare of the farmers. In the country like India, the use of information and communication technology is in an ascent stage to help the farmers in taking right decisions at right time to carry out their farm operations. The effectiveness of any organisation depends upon several factors, out of which effective communication is one of the most important. Presently the dissemination of the agricultural information is mostly depending on information and communication technologies.\r\nIn India many problems like inadequate infrastructure are barrier in initiating information and communication technologies in agriculture and other allied sectors. Mostly the farmers in our country are small and marginal and their economic standard is not so strong to afford the cost of information technologies. Inaccessibility of farmers to information and communication technologies will polarize the knowledge of global society. The information and communication technologies like Voice Over Internet Protocol (VOIP) and Wireless in Local-Loop (WLL) are cheaper sources of information infrastructure and this can be a milestone in improving accessibility to new technologies. Now the internet has started to dispatch its services to the farmers through its network, knowledge services and this will help to flow many kinds of agriculture and allied sectors produces from villages to long distances. Internet is emerging as potential tool to access global information and enabling two way communication. In order to exploit the potentiality of Internet, Food and Agriculture Organisation (FAO) has formulated Virtual Extension and Research Communication Network (VERCON) to establish within human and institutional elements of agricultural and allied sectors research and extension. Videoconferencing is very helpful for the farmers of far-flung areas to interact with researchers, administrators and policy makers.\r\nIn order to provide information and communication technologies in the rural areas, several projects have been implemented on pilot basis. The village knowledge centre run by M.S.Swaminathan Research Foundation (MSSRF) in Pudducherry represented an experiment in providing information and knowledge resources to total community on various subjects of education, agriculture, animal husbandry and banking. This project used wireless radio for data and analog voice transmission between semi-urban hub centre and eight village centres. Information and communication technologies have a remarkable impact on agricultural and allied sectors. In order to enlarge the use of technologies for the rural people we need to design products, services and technologies that can solve the farming related problems and ameliorate local social-economic conditions. The lack of focus on rural areas communication, inefficient market for agricultural products, inability of Government in dealing with the natural resources, management to integrate new technology into their operation and badly structure approach towards economic reform in information technology sectors are some of the constraints in transfer of technology to the farmersâ€™ fields. The potentiality of information technology is extensive and needs to be exploited for more personalized services in agriculture and allied sectors. The access of information and communication technologies to the farming community should be increased by reducing the cost of cultivation. Information and communication technologies are helpful to \r\n(i)	Increase the awareness and knowledge of farmers about the new technologies in agriculture and allied sectors.\r\n(ii)	Increase awareness about the Government programmes and policies.\r\n(iii)	Increase the agricultural productivity of the farmers.\r\n(iv)	 Increase price realization of farm produce at village level.\r\n(v)	Improvement in agricultural extension. \r\n(vi)	Enable community based organisation to promote income generating activities.\r\nMany farmers have developed their own new package and practices and they are proved useful in increasing the agricultural productivity. Most of these technologies remain in local use and are not disseminated globally.\r\nThe use of information and communication technologies based measures like video and audio CDs can facilitate the accessibility of these innovations to the farmers who cannot read. Information and communication technologies have largely been understood as the new kind of media and communication development infrastructure which helps in the dissemination of information across distance. The information and communication technologies infrastructure can improve the cost and quality of extension services as the present extension system is severely affected by limited efficient manpower. Competitiveness in the Indian agriculture and allied sectors can trigger higher productivity, higher income and risk management by inducing effective information technology. In order to find out ways for suitable information technology in agriculture, our research organisations need to set some village knowledge centres. Whenever a new sound technology is developed, it should be supplied to village knowledge centre from where it can be used by the farmers. Significant results of agricultural technologies should be shown to the farmers using new communication technologies like multi media, video conferencing and internet in their villages to create awareness.\r\n', 'ita.jpg', '', '', '', 'active'),
(7, 'Blog', 'Soil Health', 'A deficient monsoon and a global slump in commodity prices have taken a toll on Indian farmers, who have spent heavily to save standing crops,\r\nbut will have to sell their produce at depressed prices. The situation is worse in dry and arid regions of Vidarbha in \r\nMaharashtra and Telangana, with regular reports of farmer suicides. In an interview, Union agriculture minister Radha Mohan Singh comments on these issues. Edited excerpts: The recently released Key Indicators of Situation of Agricultural Households in India shows that the lot of Indian farmers has not changed in the past decade. How will you remedy this situation. Being a farmer, I admit this is the reality. The country might have progressed, but a village and a farmers life have not improved. There is no doubt we are self sufficient in foodgrains production, but we have not addressed problems of low productivity, rising costs of cultivation, lack of irrigation and giving farmers improved varieties. No schemes were taken up in mission mode to solve these issues.\r\nIndia has 145 million farm holdings. Farmers are not aware of soil health and they blindly use fertilizers. The result is a drop in productivity. Our government has initiated programmes on mission mode to give every farmer a soil health card. We will spend Rs 568 crore in the next three years towards this.\r\nOur other focus is to bring irrigation facilities to small and marginal farmers. Sixty five per cent of cultivable land still does not have irrigation facilities. Even such facilities are limited to states like Punjab and Haryana, and for large farmers. Crores have been spent to provide irrigation in Vidarbha and Bundelkhand, but the facilities never reached the fields. We are bringing various departments rural development, agriculture and water resources in an integrated way to increase access to irrigation. We are following the example set by Gujarat to provide every farmer with a soil health card and irrigation facilities. Our other focus is to strengthen the existing Krishi Vigyan Kendras to take the lab scientific research and improved varieties to the land. Further, we are planning to connect the entire country through an e marketing network. Most of these schemes have not taken off. Why this delay These schemes are planned from state and district levels. It will take three years to give soil health cards to every farmer. We have already spent Rs 86 crore on soil health laboratories in six months compared with Rs 112 crore spent between 2007 and 2012. The irrigation scheme is being implemented by four ministries on 29 December, the Prime Minister reviewed it and gave his suggestions. We are in the final stages and will launch the scheme soon. Funding is not a problem. Several state governments havenâ€™t been able to spend the money allotted to them in past fiscal years.\r\nNabard is in charge of implementing the credit scheme for landless farmers. I dont know the\r\nNew thrust exact numbers, but the finance minister has said the scheme is well on target. A farmer knows that you cannot harvest the day you sow the seeds. Results of our initiatives will show in a few years. Last year in Vidarbha and Telangana, more than 1,000 farmer suicides were reported. Your ministry is yet to act. Only 9% of farmer suicides are linked to agrarian distress. Of nearly 500 farmer suicides last year, 411 were in Maharashtra. Final numbers are yet to arrive. In Maharashtra, I have personally seen that irrigation schemes were not executed. In the coming weeks I will meet MPs from Marathwada and Vidarbha regions, and the Maharashtra chief minister to fast track agricultural schemes. All suicides are regrettable, but the crisis in farming has been perpetuated by lack of implementation and focus. In Telangana, farmers grow cotton in unsuitable soil without irrigation. Deficit monsoon and slump in prices have aggravated the misery. What did the government do. As far as cotton is concerned, the textiles ministry has done record procurement this year. Globally, prices have crashed after China stopped imports. We started procurement with Andhra Pradesh and Telangana as the cotton crop is harvested there earlier than states like Gujarat. The government has acted promptly to ensure farmers do not sell below minimum support prices.\r\nRest of the problems lack of irrigation and information on soils are past sins. There is also a failure of extension services lack of manpower and no coordination between KVKs and district agriculture officials. We formed a committee to probe the problem with KVKs the report shows lack of infrastructure and scientists. Based on the report, we will take up strengthening of KVKs. We have already increased the number of agricultural extension officers from 18,000 to 26,000.\r\nAgriculture is a state subject. Extension officers belong to state governments, while we have the scientists. We will issue guidelines for regular interaction between KVK scientists and agriculture and extension officers. Be it dissemination of new technology or knowledge, we have to take it through state governments. We will speak to all state governments, it does not matter if they are run by other political parties.\r\n', 'sh.jpg', '', '', '', 'active'),
(8, 'Blog', 'Sustainable Agriculture', 'A deficient monsoon and a global slump in commodity prices have taken a toll on Indian farmers, who have spent heavily to save standing crops,\r\nbut will have to sell their produce at depressed prices. The situation is worse in dry and arid regions of Vidarbha in Maharashtra and Telangana, with regular reports of farmer suicides. In an interview, Union agriculture minister Radha Mohan Singh comments on these issues. Edited excerpts: The recently released Key Indicators of Situation of Agricultural Households in India shows that the lot of Indian farmers has not changed in the past decade. How will you remedy this situation. Being a farmer, I admit this is the reality. The country might have progressed, but a village and a farmers life have not improved. There is no doubt we are self sufficient in foodgrains production, but we have not addressed problems of low productivity, rising costs of cultivation, lack of irrigation and giving farmers improved varieties. No schemes were taken up in mission mode to solve these issues.\r\nIndia has 145 million farm holdings. Farmers are not aware of soil health and they blindly use fertilizers. The result is a drop in productivity. Our government has initiated programmes on mission mode to give every farmer a soil health card. We will spend Rs 568 crore in the next three years towards this.\r\nOur other focus is to bring irrigation facilities to small and marginal farmers. Sixty five per cent of cultivable land still does not have irrigation facilities. Even such facilities are limited to states like Punjab and Haryana, and for large farmers. Crores have been spent to provide irrigation in Vidarbha and Bundelkhand, but the facilities never reached the fields. We are bringing various departments rural development, agriculture and water resources in an integrated way to increase access to irrigation. We are following the example set by Gujarat to provide every farmer with a soil health card and irrigation facilities. Our other focus is to strengthen the existing Krishi Vigyan Kendras to take the lab scientific research and improved varieties to the land. Further, we are planning to connect the entire country through an e marketing network. Most of these schemes have not taken off. Why this delay These schemes are planned from state and district levels. It will take three years to give soil health cards to every farmer. We have already spent Rs 86 crore on soil health laboratories in six months compared with Rs 112 crore spent between 2007 and 2012. The irrigation scheme is being implemented by four ministries on 29 December, the Prime Minister reviewed it and gave his suggestions. We are in the final stages and will launch the scheme soon. Funding is not a problem. Several state governments havenâ€™t been able to spend the money allotted to them in past fiscal years.\r\nNabard is in charge of implementing the credit scheme for landless farmers. I dont know the\r\nNew thrust exact numbers, but the finance minister has said the scheme is well on target. A farmer knows that you cannot harvest the day you sow the seeds. Results of our initiatives will show in a few years. Last year in Vidarbha and Telangana, more than 1,000 farmer suicides were reported. Your ministry is yet to act. Only 9% of farmer suicides are linked to agrarian distress. Of nearly 500 farmer suicides last year, 411 were in Maharashtra. Final numbers are yet to arrive. In Maharashtra, I have personally seen that irrigation schemes were not executed. In the coming weeks I will meet MPs from Marathwada and Vidarbha regions, and the Maharashtra chief minister to fast track agricultural schemes. All suicides are regrettable, but the crisis in farming has been perpetuated by lack of implementation and focus. In Telangana, farmers grow cotton in unsuitable soil without irrigation. Deficit monsoon and slump in prices have aggravated the misery. What did the government do. As far as cotton is concerned, the textiles ministry has done record procurement this year. Globally, prices have crashed after China stopped imports. We started procurement with Andhra Pradesh and Telangana as the cotton crop is harvested there earlier than states like Gujarat. The government has acted promptly to ensure farmers do not sell below minimum support prices.\r\nRest of the problems lack of irrigation and information on soils are past sins. There is also a failure of extension services lack of manpower and no coordination between KVKs and district agriculture officials. We formed a committee to probe the problem with KVKs the report shows lack of infrastructure and scientists. Based on the report, we will take up strengthening of KVKs. We have already increased the number of agricultural extension officers from 18,000 to 26,000.\r\nAgriculture is a state subject. Extension officers belong to state governments, while we have the scientists. We will issue guidelines for regular interaction between KVK scientists and agriculture and extension officers. Be it dissemination of new technology or knowledge, we have to take it through state governments. We will speak to all state governments, it does not matter if they are run by other political parties.\r\n', 'sa.jpg', '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `m_no` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crop_area`
--

CREATE TABLE `crop_area` (
  `city` varchar(30) NOT NULL,
  `crop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop_area`
--

INSERT INTO `crop_area` (`city`, `crop`) VALUES
('Ariyalur', 'Banana'),
('Ariyalur', 'Chillies'),
('Ariyalur', 'Cotton'),
('Ariyalur', 'Ground nut '),
('Ariyalur', 'Maize'),
('Ariyalur', 'Rice'),
('Ariyalur', 'Sugarcane'),
('Ariyalur', 'Tapioca'),
('Ariyalur', 'Tomato '),
('Chennai', 'Brinjal '),
('Chennai', 'Chillies'),
('Chennai', 'Ladies finger '),
('Chennai', 'Rice'),
('Chennai', 'Tomato '),
('Coimbatore', 'Castor'),
('Coimbatore', 'Coconut '),
('Coimbatore', 'Cotton'),
('Coimbatore', 'Greengram'),
('Coimbatore', 'Maize'),
('Coimbatore', 'Ragi'),
('Coimbatore', 'Redgram'),
('Coimbatore', 'Rice'),
('Coimbatore', 'Wheat'),
('Cuddalore', 'Cotton'),
('Cuddalore', 'Gingelly '),
('Cuddalore', 'Greengram'),
('Cuddalore', 'Ground nut '),
('Cuddalore', 'Maize'),
('Cuddalore', 'Rice'),
('Dharmapuri', 'Banana'),
('Dharmapuri', 'Chillies'),
('Dharmapuri', 'Cotton'),
('Dharmapuri', 'Dry bulb onions'),
('Dharmapuri', 'Ground nut '),
('Dharmapuri', 'Ragi'),
('Dharmapuri', 'Rice'),
('Dharmapuri', 'Sugarcane'),
('Dharmapuri', 'Tamarind'),
('Dharmapuri', 'Tomato '),
('Dindigul', 'Banana'),
('Dindigul', 'Chillies'),
('Dindigul', 'Ladies finger '),
('Dindigul', 'Sugarcane'),
('Dindigul', 'Tomato '),
('Erode', 'Banana'),
('Erode', 'Chillies'),
('Erode', 'Cotton'),
('Erode', 'Dry bulb onions'),
('Erode', 'Gingelly '),
('Erode', 'Greengram'),
('Erode', 'Jowar'),
('Erode', 'Maize'),
('Erode', 'Ragi'),
('Erode', 'Redgram'),
('Erode', 'Rice'),
('Erode', 'Sugarcane'),
('Kallakurichi', 'Gingelly '),
('Kallakurichi', 'Ground nut '),
('Kallakurichi', 'Rice'),
('Kallakurichi', 'Sugarcane'),
('Kallakurichi', 'Tapioca'),
('Kanchipuram', 'Brinjal '),
('Kanchipuram', 'Ground nut '),
('Kanchipuram', 'Ladies finger '),
('Kanchipuram', 'Ragi'),
('Kanchipuram', 'Rice'),
('Kanchipuram', 'Sugarcane'),
('Kanniyakumari', 'Banana'),
('Kanniyakumari', 'Brinjal '),
('Kanniyakumari', 'Coconut '),
('Kanniyakumari', 'Ladies finger '),
('Kanniyakumari', 'Rice'),
('Kanniyakumari', 'Tapioca'),
('Kanniyakumari', 'Tomato '),
('Karur', 'Brinjal '),
('Karur', 'Chillies'),
('Karur', 'Dry bulb onions'),
('Karur', 'Ladies finger '),
('Karur', 'Tapioca'),
('Karur', 'Tomato '),
('Krishnagiri', 'Banana'),
('Krishnagiri', 'Coconut '),
('Krishnagiri', 'Cotton'),
('Krishnagiri', 'Ground nut '),
('Krishnagiri', 'Maize'),
('Krishnagiri', 'Ragi'),
('Krishnagiri', 'Redgram'),
('Krishnagiri', 'Rice'),
('Krishnagiri', 'Sugarcane'),
('Madurai', 'Brinjal '),
('Madurai', 'Chillies'),
('Madurai', 'Cotton'),
('Madurai', 'Green Onions'),
('Madurai', 'Ladies finger '),
('Madurai', 'Maize'),
('Madurai', 'Rice'),
('Madurai', 'Tomato '),
('Nagapattinam', 'Banana'),
('Nagapattinam', 'Brinjal '),
('Nagapattinam', 'Chillies'),
('Nagapattinam', 'Ground nut '),
('Nagapattinam', 'Rice'),
('Nagapattinam', 'Sugarcane'),
('Nagapattinam', 'Tapioca'),
('Namakkal', 'Banana'),
('Namakkal', 'Coffee '),
('Namakkal', 'Dry bulb onions'),
('Namakkal', 'Greengram'),
('Namakkal', 'Ground nut '),
('Namakkal', 'Jowar'),
('Namakkal', 'Maize'),
('Namakkal', 'Rice'),
('Namakkal', 'Sugarcane'),
('Namakkal', 'Tapioca'),
('Namakkal', 'Tomato '),
('Namakkal', 'Turmeric'),
('Nilgiris', 'Carrot '),
('Nilgiris', 'Coffee '),
('Nilgiris', 'Tea'),
('Perambalur', 'Banana'),
('Perambalur', 'Brinjal '),
('Perambalur', 'Chillies'),
('Perambalur', 'Dry bulb onions'),
('Perambalur', 'Maize'),
('Perambalur', 'Tapioca'),
('Perambalur', 'Tomato '),
('Perambalur', 'Turmeric'),
('Pudukkottai', 'Banana'),
('Pudukkottai', 'Brinjal '),
('Pudukkottai', 'Chillies'),
('Pudukkottai', 'Gingelly '),
('Pudukkottai', 'Ground nut '),
('Pudukkottai', 'Redgram'),
('Pudukkottai', 'Rice'),
('Pudukkottai', 'Sugarcane'),
('Pudukkottai', 'Tapioca'),
('Ramanathapuram', 'Chillies'),
('Ramanathapuram', 'Cotton'),
('Ramanathapuram', 'Gingelly '),
('Ramanathapuram', 'Greengram'),
('Ramanathapuram', 'Ground nut '),
('Ramanathapuram', 'Maize'),
('Ramanathapuram', 'Ragi'),
('Ramanathapuram', 'Redgram'),
('Ramanathapuram', 'Rice'),
('Salem', 'Bajra'),
('Salem', 'Banana'),
('Salem', 'Bengalgram'),
('Salem', 'Brinjal '),
('Salem', 'Castor'),
('Salem', 'Chillies'),
('Salem', 'Coffee '),
('Salem', 'Cotton'),
('Salem', 'Dry bulb onions'),
('Salem', 'Greengram'),
('Salem', 'Ground nut '),
('Salem', 'Jowar'),
('Salem', 'Ladies finger '),
('Salem', 'Maize'),
('Salem', 'Ragi'),
('Salem', 'Rice'),
('Salem', 'Tapioca'),
('Salem', 'Tomato '),
('Salem', 'Turmeric'),
('Sivaganga', 'Bajra'),
('Sivaganga', 'Castor'),
('Sivaganga', 'Cotton'),
('Sivaganga', 'Greengram'),
('Sivaganga', 'Ground nut '),
('Sivaganga', 'Jowar'),
('Sivaganga', 'Maize'),
('Sivaganga', 'Ragi'),
('Sivaganga', 'Rice'),
('Sivaganga', 'Sugarcane'),
('Thanjavur', 'Bajra'),
('Thanjavur', 'Bengalgram'),
('Thanjavur', 'Castor'),
('Thanjavur', 'Cotton'),
('Thanjavur', 'Greengram'),
('Thanjavur', 'Ground nut '),
('Thanjavur', 'Jowar'),
('Thanjavur', 'Maize'),
('Thanjavur', 'Ragi'),
('Thanjavur', 'Rice'),
('Thanjavur', 'Sugarcane'),
('Theni', 'Bajra'),
('Theni', 'Banana'),
('Theni', 'Bengalgram'),
('Theni', 'Castor'),
('Theni', 'Chillies'),
('Theni', 'Cotton'),
('Theni', 'Dry bulb onions'),
('Theni', 'Gingelly '),
('Theni', 'Greengram'),
('Theni', 'Ground nut '),
('Theni', 'Jowar'),
('Theni', 'Maize'),
('Theni', 'Ragi'),
('Theni', 'Rice'),
('Theni', 'Sugarcane'),
('Thoothukudi', 'Bajra'),
('Thoothukudi', 'Banana'),
('Thoothukudi', 'Bengalgram'),
('Thoothukudi', 'Castor'),
('Thoothukudi', 'Chillies'),
('Thoothukudi', 'Cotton'),
('Thoothukudi', 'Dry bulb onions'),
('Thoothukudi', 'Gingelly '),
('Thoothukudi', 'Greengram'),
('Thoothukudi', 'Ground nut '),
('Thoothukudi', 'Jowar'),
('Thoothukudi', 'Maize'),
('Thoothukudi', 'Ragi'),
('Thoothukudi', 'Rice'),
('Thoothukudi', 'Sugarcane'),
('Tiruchirappalli', 'Bajra'),
('Tiruchirappalli', 'Banana'),
('Tiruchirappalli', 'Bengalgram'),
('Tiruchirappalli', 'Brinjal '),
('Tiruchirappalli', 'Castor'),
('Tiruchirappalli', 'Chillies'),
('Tiruchirappalli', 'Coriander'),
('Tiruchirappalli', 'Cotton'),
('Tiruchirappalli', 'Dry bulb onions'),
('Tiruchirappalli', 'Greengram'),
('Tiruchirappalli', 'Ground nut '),
('Tiruchirappalli', 'Jowar'),
('Tiruchirappalli', 'Maize'),
('Tiruchirappalli', 'Ragi'),
('Tiruchirappalli', 'Rice'),
('Tiruchirappalli', 'Sugarcane'),
('Tiruchirappalli', 'Tamarind'),
('Tiruchirappalli', 'Tapioca'),
('Tiruchirappalli', 'Tomato '),
('Tiruchirappalli', 'Turmeric'),
('Tirunelveli', 'Bajra'),
('Tirunelveli', 'Chillies'),
('Tirunelveli', 'Coconut '),
('Tirunelveli', 'Cotton'),
('Tirunelveli', 'Gingelly '),
('Tirunelveli', 'Ground nut '),
('Tirunelveli', 'Ragi'),
('Tirunelveli', 'Rice'),
('Tiruppur', 'Banana'),
('Tiruppur', 'Brinjal '),
('Tiruppur', 'Dry bulb onions'),
('Tiruppur', 'Jowar'),
('Tiruppur', 'Ladies finger '),
('Tiruppur', 'Maize'),
('Tiruppur', 'Rice'),
('Tiruppur', 'Tapioca'),
('Tiruppur', 'Tomato '),
('Tiruvallur', 'Greengram'),
('Tiruvallur', 'Ground nut '),
('Tiruvallur', 'Ragi'),
('Tiruvallur', 'Rice'),
('Tiruvallur', 'Sugarcane'),
('Tiruvannamalai', 'Ground nut '),
('Tiruvannamalai', 'Rice'),
('Tiruvannamalai', 'Sugarcane'),
('Tiruvarur', 'Bajra'),
('Tiruvarur', 'Castor'),
('Tiruvarur', 'Coconut '),
('Tiruvarur', 'Gingelly '),
('Tiruvarur', 'Ground nut '),
('Tiruvarur', 'Rice'),
('Tiruvarur', 'Sugarcane'),
('Tiruvarur', 'Tapioca'),
('Vellore', 'Cotton'),
('Vellore', 'Greengram'),
('Vellore', 'Ground nut '),
('Vellore', 'Maize'),
('Vellore', 'Ragi'),
('Vellore', 'Redgram'),
('Vellore', 'Rice'),
('Vellore', 'Sugarcane'),
('Viluppuram', 'Bajra'),
('Viluppuram', 'Gingelly '),
('Viluppuram', 'Ground nut '),
('Viluppuram', 'Rice'),
('Viluppuram', 'Sugarcane'),
('Viluppuram', 'Tapioca'),
('Virudhunagar', 'Banana'),
('Virudhunagar', 'Brinjal '),
('Virudhunagar', 'Chillies'),
('Virudhunagar', 'Coriander'),
('Virudhunagar', 'Green Onions'),
('Virudhunagar', 'Ground nut '),
('Virudhunagar', 'Ladies finger '),
('Virudhunagar', 'Maize'),
('Virudhunagar', 'Rice');

-- --------------------------------------------------------

--
-- Table structure for table `crop_details`
--

CREATE TABLE `crop_details` (
  `crop` varchar(20) NOT NULL,
  `land_prep` varchar(30) NOT NULL,
  `varieties` varchar(30) NOT NULL,
  `sowing` varchar(30) NOT NULL,
  `irrigate` varchar(30) NOT NULL,
  `harvest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crop_details`
--

INSERT INTO `crop_details` (`crop`, `land_prep`, `varieties`, `sowing`, `irrigate`, `harvest`) VALUES
('Bajra', 'bajralandprep.php', 'bajravarieties.php', 'bajrasowing.php', 'bajrairrigate.php', 'bajraharvest.php'),
('Banana', 'bananalp.php', 'bananav.php', 'bananas.php', 'bananai.php', 'bananah.php'),
('Bengalgram', 'bglp.php', 'bgv.php', 'bgs.php', 'bgi.php', 'bgh.php'),
('Brinjal', 'brinjallp.php', 'brinjalv.php', 'brinjals.php', 'brinjali.php', 'brinjalh.php'),
('Carrot', 'carrotlp.php', 'carrotv.php', 'carrots.php', 'carroti.php', 'carroth.php'),
('Castor', 'castorlp.php', 'castorv.php', 'castors.php', 'castori.php', 'castorh.php'),
('Chillies', 'chilli-lp.php', 'chilli-v.php', 'chilli-s.php', 'chilli-i.php', 'chilli-h.php'),
('Coconut', 'coconutlp.php', 'coconutv.php', 'coconuts.php', 'coconuti.php', 'coconuth.php'),
('Coffee', 'coffeelp.php', 'coffeev.php', 'coffees.php', 'coffeei.php', 'coffeeh.php'),
('Coriander', 'corianderlp.php', 'corianderv.php', 'corianders.php', 'corianderi.php', 'corianderh.php'),
('Cotton', 'cottonlp.php', 'cottonv.php', 'cottons.php', 'cottoni.php', 'cottonh.php'),
('Dry bulb onions', 'onionlp.php', 'onionv.php', 'onions.php', 'onioni.php', 'onionh.php'),
('Gingelly', 'gingellylp.php', 'gingellyv.php', 'gingellys.php', 'gingellyi.php', 'gingellyh.php'),
('Green Onions', 'onionlp.php', 'onionv.php', 'onions.php', 'onioni.php', 'onionh.php'),
('Greengram', 'gglp.php', 'ggv.php', 'ggs.php', 'ggi.php', 'ggh.php'),
('Ground nut', 'gnlp.php', 'gnv.php', 'gns.php', 'gni.php', 'gnh.php'),
('Jowar', 'jowarlandprep.php', 'jowarvarieties.php', 'jowarsowing.php', 'jowarirrigate.php', 'jowarharvest.php'),
('Ladies finger', 'ladieslp.php', 'ladiesv.php', 'ladiess.php', 'ladiesi.php', 'ladiesh.php'),
('Maize', 'mlandprep.php', 'mvarieties.php', 'msowing.php', 'mirrigate.php', 'mharvest.php'),
('Potato', 'potatolp.php', 'potatov.php', 'potatos.php', 'potatoi.php', 'potatoh.php'),
('Ragi', 'raglandprep.php', 'ragvarieties.php', 'ragsowing.php', 'ragirrigate.php', 'ragharvest.php'),
('Redgram', 'rglp.php', 'rgv.php', 'rgs.php', 'rgi.php', 'rgh.php'),
('Rice', 'rlandprep.php', 'rvarieties.php', 'rsowing.php', 'rirrigate.php', 'rharvest.php'),
('Rubber', 'rubberlp.php', 'rubberv.php', 'rubbers.php', 'rubberi.php', 'rubberh.php'),
('Sugarcane', 'sclp.php', 'scv.php', 'scs.php', 'sci.php', 'sch.php'),
('Tamarind', 'tamarindlp.php', 'tamarindv.php', 'tamarinds.php', 'tamarindi.php', 'tamarindh.php'),
('Tapioca', 'tapiocalp.php', 'tapiocav.php', 'tapiocas.php', 'tapiocai.php', 'tapiocah.php'),
('Tea', 'tealp.php', 'teav.php', 'teas.php', 'teai.php', 'teah.php'),
('Tomato', 'tomatolp.php', 'tomatov.php', 'tomatos.php', 'tomatoi.php', 'tomatoh.php'),
('Turmeric', 'turmeric-lp.php', 'turmeric-v.php', 'turmeric-s.php', 'turmeric-i.php', 'turmeric-h.php'),
('Wheat', 'wlp.php', 'wv.php', 'ws.php', 'wi.php', 'wh.php');

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `Ctype` varchar(30) NOT NULL,
  `Fname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`Ctype`, `Fname`) VALUES
(' Maize', 'FYM'),
('Bajra', 'NPK '),
('Banana', 'NPK'),
('Bengalgram', 'NPKS'),
('Brinjal ', 'NPK'),
('Carrot ', 'NPK'),
('Castor', 'NPK'),
('Chillies', 'NPK'),
('Coconut ', 'NPK '),
('Coffee ', 'NK'),
('Coriander', 'NPK'),
('Cotton', 'NPK '),
('Dry bulb onions', 'NPK'),
('Gingelly ', 'NPK'),
('Green Onions', 'S'),
('Greengram', 'NPS'),
('Ground nut ', 'NPKS'),
('Jowar', 'Nitrogen'),
('Ladies finger ', 'NPK'),
('Potato ', 'NPK'),
('Ragi', 'NPK '),
('Redgram', 'NPKS'),
('Rice', 'NPK '),
('Rubber ', 'NPK'),
('Sugarcane ', 'NPK '),
('Tamarind', 'NPK+FYM'),
('Tapioca', 'NPK'),
('Tea', 'NK'),
('Tomato ', 'NPK'),
('Turmeric', 'NPK'),
('Wheat', 'NPK ');

-- --------------------------------------------------------

--
-- Table structure for table `moisture`
--

CREATE TABLE `moisture` (
  `Stype` varchar(50) NOT NULL,
  `moist` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moisture`
--

INSERT INTO `moisture` (`Stype`, `moist`) VALUES
('Alluvial soils', 16.25),
('Alluvium', 16.25),
('Alluvium (Old Delta)', 16.25),
('Beach sands', 5.833),
('Black', 20),
('Black Sandy', 16),
('Calcareous Black', 23.4),
('Clay', 18.333),
('Clay Loam', 13.3),
('Coastal Alluvium', 7.03),
('Deep Red', 15),
('Deep Red Loam', 15),
('Latteritic', 32.7),
('Loamy', 16.25),
('Non calcareous Brown', 22.2),
('Non Calcareous Red', 20.8),
('Red Loamy', 15),
('Red Loamy(New Delta)', 15),
('Red Sandy', 5.83),
('Red Sandy Loam', 11.67),
('Saline Coastal', 16.25),
('Saline Coastal Alluvium', 16.25);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `farmername` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `area` int(11) DEFAULT NULL,
  `soil` varchar(20) DEFAULT NULL,
  `crop` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `farmername`, `address`, `city`, `phone`, `email_id`, `password`, `area`, `soil`, `crop`) VALUES
(1, 'Praja', 'Ganapathy', 'Coimbatore', 9099990999, 'praja@gmail.com', 'praja', 10, NULL, 'Maize'),
(2, 'aisha lekaa', 'metupalayam', 'Coimbatore', 9090909090, 'a@gmail.com', 'a', 10, NULL, 'Redgram'),
(3, 'Gayathri B', 'Nehru nagar', 'Coimbatore', 9099990999, 'gaya@gmail.com', 'gayathri', NULL, NULL, NULL),
(4, 'Ashwathy', '12/1  Ganapathy', 'Coimbatore', 9095570707, 'achu@gmail.com', 'achu', 10, NULL, 'Rice'),
(5, 'Meenakshi', 'KK Nagar Ganapathy', 'Coimbatore', 9095570707, 'meena@gmail.com', 'meena', 10, NULL, 'Maize'),
(6, 'Santhi', '12/1 KK Nagar Ganapathy', 'Erode', 9864111111, 'santhi@gmail.com', 'santhi', 10, NULL, 'Maize');

-- --------------------------------------------------------

--
-- Table structure for table `soil`
--

CREATE TABLE `soil` (
  `city` varchar(30) DEFAULT NULL,
  `Stype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soil`
--

INSERT INTO `soil` (`city`, `Stype`) VALUES
('Ariyalur', 'Alluvium (Old Delta)'),
('Ariyalur', 'Red Loamy (New Delta)'),
('Chennai', 'Alluvial soils'),
('Chennai', 'Beach sands'),
('Chennai', 'Clay'),
('Coimbatore', 'Black'),
('Coimbatore', 'Red Loamy'),
('Cuddalore', 'Alluvium (Old Delta)'),
('Cuddalore', 'Clay Loam'),
('Cuddalore', 'Red Loamy (New Delta)'),
('Cuddalore', 'Red Sandy Loam'),
('Cuddalore', 'Saline Coastal Alluvium'),
('Dharmapuri', 'Calcareous Black'),
('Dharmapuri', 'Non Calcareous brown'),
('Dharmapuri', 'Non Calcareous Red'),
('Dindigul', ' Latteritic'),
('Dindigul', 'Black'),
('Dindigul', 'Red Loamy'),
('Erode', 'Black'),
('Erode', 'Red Loamy'),
('Kallakurichi', 'Clay Loam'),
('Kallakurichi', 'Red Sandy Loam'),
('Kallakurichi', 'Saline Coastal Alluvium'),
('Kanchipuram', 'Clay Loam'),
('Kanchipuram', 'Red Sandy Loam'),
('Kanchipuram', 'Saline Coastal Alluvium'),
('Kanniyakumari', 'Alluvium'),
('Kanniyakumari', 'Deep Red Loam'),
('Kanniyakumari', 'Saline Coastal'),
('Karur', 'Black'),
('Karur', 'Red Loamy'),
('Krishnagiri', 'Black sandy'),
('Krishnagiri', 'Loamy'),
('Krishnagiri', 'Red sandy'),
('Madurai', 'Black'),
('Madurai', 'Coastal Alluvium'),
('Madurai', 'Deep Red soil'),
('Madurai', 'Red Sandy soil'),
('Nagapattinam', 'Alluvium (Old Delta)'),
('Nagapattinam', 'Red Loamy (New Delta)'),
('Namakkal', 'Black'),
('Namakkal', 'Calcareous Black'),
('Namakkal', 'Non Calcareous brown'),
('Namakkal', 'Non Calcareous Red'),
('Namakkal', 'Red loamy'),
('Nilgiris', 'Latteritic'),
('Perambalur', 'Alluvium (Old Delta)'),
('Perambalur', 'Red Loamy (New Delta)'),
('Pudukkottai', 'Alluvium (Old Delta)'),
('Pudukkottai', 'Red Loamy (New Delta)'),
('Ramanathapuram', 'Black'),
('Ramanathapuram', 'Coastal Alluviam'),
('Ramanathapuram', 'Deep Red soil'),
('Ramanathapuram', 'Red Sandy soil'),
('Salem', 'Calcareous Black'),
('Salem', 'Non Calcareous brown'),
('Salem', 'Non Calcareous Red'),
('Sivaganga', 'Black'),
('Sivaganga', 'Coastal Alluvium'),
('Sivaganga', 'Deep Red'),
('Sivaganga', 'Red sandy'),
('Thanjavur', 'Alluvium (Old Delta)'),
('Thanjavur', 'Red Loamy (New Delta)'),
('Theni', 'Black'),
('Theni', 'Red Loamy'),
('Thoothukudi', 'Black'),
('Thoothukudi', 'Coastal Alluvium'),
('Thoothukudi', 'Deep Red'),
('Thoothukudi', 'Red sandy'),
('Tiruchirappalli', 'Alluvium (Old Delta)'),
('Tiruchirappalli', 'Red Loamy (New Delta)'),
('Tirunelveli', 'Black'),
('Tirunelveli', 'Coastal Alluvium'),
('Tirunelveli', 'Deep Red'),
('Tirunelveli', 'Red sandy'),
('Tiruppur', 'Black'),
('Tiruppur', 'Red Loamy'),
('Tiruvallur', 'Clay Loam'),
('Tiruvallur', 'Red Sandy Loam'),
('Tiruvallur', 'Saline Coastal Alluvium'),
('Tiruvarur', 'Alluvium (Old Delta)'),
('Tiruvarur', 'Red Loamy (New Delta)'),
('Vellore', 'Clay Loam'),
('Vellore', 'Red Sandy Loam'),
('Vellore', 'Saline Coastal Alluvium'),
('Viluppuram', 'Clay Loam'),
('Viluppuram', 'Red Sandy Loam'),
('Viluppuram', 'Saline Coastal Alluvium'),
('Virudhunagar', 'Black'),
('Virudhunagar', 'Coastal Alluvium'),
('Virudhunagar', 'Deep Red'),
('Virudhunagar', 'Red sandy');

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE `weather` (
  `city` varchar(30) NOT NULL,
  `Humidity` int(11) NOT NULL,
  `Annual_rainfall` int(11) NOT NULL,
  `Temperature` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`city`, `Humidity`, `Annual_rainfall`, `Temperature`) VALUES
('Ariyalur', 60, 70, 73),
('Chennai', 75, 140, 29),
('Coimbatore', 68, 62, 26),
('Cuddalore', 72, 124, 32),
('Dharmapuri', 65, 91, 30),
('Dindigul', 60, 71, 28),
('Erode', 68, 70, 28),
('Kallakurichi', 55, 107, 30),
('Kanchipuram', 63, 125, 28),
('Kanniyakumari', 67, 146, 30),
('Karur', 60, 74, 32),
('Krishnagiri', 65, 90, 30),
('Madurai', 60, 86, 29),
('Nagapattinam', 72, 134, 29),
('Namakkal', 60, 80, 28),
('Nilgiris', 95, 170, 15),
('Perambalur', 60, 91, 27),
('Pudukkottai', 60, 82, 29),
('Ramanathapuram', 60, 83, 29),
('Salem', 57, 90, 32),
('Sivaganga', 68, 87, 29),
('Thanjavur', 57, 94, 29),
('Theni', 67, 83, 27),
('Thoothukudi', 78, 58, 29),
('Tiruchirappalli', 59, 84, 29),
('Tirunelveli', 83, 75, 29),
('Tiruppur', 59, 70, 27),
('Tiruvallur', 63, 115, 28),
('Tiruvannamalai', 49, 107, 28),
('Tiruvarur', 57, 110, 29),
('Vellore', 72, 103, 28),
('Viluppuram', 68, 106, 28),
('Virudhunagar', 62, 83, 29);

-- --------------------------------------------------------

--
-- Table structure for table `weedicide`
--

CREATE TABLE `weedicide` (
  `crop` varchar(20) NOT NULL,
  `weedicide` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  `weedicide_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weedicide`
--

INSERT INTO `weedicide` (`crop`, `weedicide`, `link`, `weedicide_pic`) VALUES
('Rice', 'ZINTA - Pretilachlor', 'https://www.indiamart.com/proddetail/pretilachlor-50-ec-8109792755.html', 'https://4.imimg.com/data4/JJ/NJ/MY-4463293/pretilachlor-50-ec-500x500.png'),
('cotton', 'STROM Plus - Pendimethalin', 'https://agribegri.com/products/strom-1-liter--pendimethalin-online--buy-herbicide-online.php', 'https://agribegri.com/productimage/4539e06097a8eaf7a564435925f241e5-10-12-17-12-14-10.png'),
('Jowar', 'STROM Plus - Pendimethalin ', 'https://agribegri.com/products/strom-1-liter--pendimethalin-online--buy-herbicide-online.php', 'https://agribegri.com/productimage/4539e06097a8eaf7a564435925f241e5-10-12-17-12-14-10.png'),
('Groundnut', 'STROM Plus - Pendimethalin', 'https://agribegri.com/products/strom-1-liter--pendimethalin-online--buy-herbicide-online.php', 'https://agribegri.com/productimage/4539e06097a8eaf7a564435925f241e5-10-12-17-12-14-10.png'),
('Ragi', 'Heera 44 - 2-4-D Ethyl Ester 38% EC ', 'https://www.indiamart.com/proddetail/2-4-d-ethyl-ester-38-ec-heera-44-16418873173.html', 'https://5.imimg.com/data5/ET/LU/MY-3761787/heera-44-herbicide-500x500.jpg'),
('Bajra', 'EROS - Pyrazosulfuron Ethyl', 'https://www.indiamart.com/proddetail/upl-pretilachlor-and-pyrazosulfuron-ethyl-eros-active-ingredient-20825492562.html', 'https://5.imimg.com/data5/DE/YG/SS/SELLER-5839583/upl-pretilachlor-and-pyrazosulfuron-ethyl-eros-active-ingredient-500x500.jpg'),
('Maize', 'Heera 44 - 2-4-D Ethyl Ester 38% EC ', 'https://www.indiamart.com/proddetail/upl-pretilachlor-and-pyrazosulfuron-ethyl-eros-active-ingredient-20825492562.html', 'https://5.imimg.com/data5/DE/YG/SS/SELLER-5839583/upl-pretilachlor-and-pyrazosulfuron-ethyl-eros-active-ingredient-500x500.jpg'),
('Wheat', 'Heera 44 - 2-4-D Ethyl Ester 38% EC ', 'https://www.indiamart.com/proddetail/upl-pretilachlor-and-pyrazosulfuron-ethyl-eros-active-ingredient-20825492562.html', 'https://5.imimg.com/data5/DE/YG/SS/SELLER-5839583/upl-pretilachlor-and-pyrazosulfuron-ethyl-eros-active-ingredient-500x500.jpg'),
('Sugarcane', 'Heera 44 - 2-4-D Ethyl Ester 38% EC ', 'https://www.indiamart.com/proddetail/2-4-d-ethyl-ester-38-ec-heera-44-16418873173.html', 'https://5.imimg.com/data5/DE/YG/SS/SELLER-5839583/upl-pretilachlor-and-pyrazosulfuron-ethyl-eros-active-ingredient-500x500.jpg'),
('Coconut', 'GLYFOS 41 - Glyphosate 41% SL', 'https://agribegri.com/products/glyphos-41-online--buy-glyphosate-online--herbicide-online.php', 'https://www.agrarking.com/media/catalog/product/8/1/810069_1.jpg'),
('Bengalgram', 'Weedicide Oxadiazon ', 'https://www.alibaba.com/showroom/oxadiazon-ec.html', 'https://sc01.alicdn.com/kf/UTB8fZkmFVfFXKJk43Ot760IPFXa2/Price-Crop-Protection-Weedicide-oxadiazon-25-ec.png_300x300.jpg'),
('Redgram', 'Weedicide Oxadiazon ', 'https://www.alibaba.com/showroom/oxadiazon-ec.html', 'https://sc01.alicdn.com/kf/UTB8fZkmFVfFXKJk43Ot760IPFXa2/Price-Crop-Protection-Weedicide-oxadiazon-25-ec.png_300x300.jpg'),
('Turmeric', 'SUPER PENDA - PENDIMETHALIN', 'https://agribegri.com/products/upl-dost-super-700-ml-buy-online.php', 'https://5.imimg.com/data5/KE/XN/FT/SELLER-3747077/bharat-penda-30-herbicides-500x500.PNG'),
('Chillies', 'SUPER PENDA - PENDIMETHALIN', 'https://agribegri.com/products/upl-dost-super-700-ml-buy-online.php', 'https://5.imimg.com/data5/KE/XN/FT/SELLER-3747077/bharat-penda-30-herbicides-500x500.PNG'),
('Tapioca', 'SUPER PENDA - PENDIMETHALIN', 'https://agribegri.com/products/upl-dost-super-700-ml-buy-online.php', 'https://5.imimg.com/data5/KE/XN/FT/SELLER-3747077/bharat-penda-30-herbicides-500x500.PNG'),
('Dry bulb onions', 'Ronaldo - Diphenyl ether', 'https://www.crystalcropprotection.com/product.php?proId=29', 'https://www.crystalcropprotection.com/admin/product-images/thumb/RonaldoNewPack.png'),
('Green Onions', 'Ronaldo - Diphenyl ether', 'https://www.crystalcropprotection.com/product.php?proId=29', 'https://www.crystalcropprotection.com/admin/product-images/thumb/RonaldoNewPack.png'),
('Tea', 'Crystal Clinton - Glyphosate', 'https://dir.indiamart.com/items/crystal-clinton-herbicide-s153246.html', 'https://5.imimg.com/data5/QC/MZ/FC/GLADMIN-3061/crystal-linton-herbicide-250x250.png'),
('Banana', 'Crystal Clinton - Glyphosate', 'https://dir.indiamart.com/items/crystal-clinton-herbicide-s153246.html', 'https://5.imimg.com/data5/QC/MZ/FC/GLADMIN-3061/crystal-linton-herbicide-250x250.png'),
('Potato', 'Super Pera Paraquate', 'https://www.indiabizclub.com/product/weedicides-super-pera-paraquate-dichloride-24-sl-zqx1su5o9z1ozq05qrt', 'https://5.imimg.com/data5/JY/VO/UV/SELLER-3978161/peraforce-paraquat-dichloride-24-sl-500x500.jpg'),
('Rubber', 'Super Pera Paraquate', 'https://www.indiabizclub.com/product/weedicides-super-pera-paraquate-dichloride-24-sl-zqx1su5o9z1ozq05qrt', 'https://5.imimg.com/data5/JY/VO/UV/SELLER-3978161/peraforce-paraquat-dichloride-24-sl-500x500.jpg'),
('Coffee', 'Topper-77 Amonium Salt', 'https://www.crystalcropprotection.com/product.php?proId=22', 'https://5.imimg.com/data5/GV/FH/DP/GLADMIN-3061/crystal-per-77-herbicide-500x500.png'),
('Gingelly', 'GLYFOS 41 - Glyphosate 41% SL', 'https://agribegri.com/products/glyphos-41-online--buy-glyphosate-online--herbicide-online.php', 'https://agribegri.com/productimage/dded7529d038d559d67c583e43076158-01-29-19-13-04-40.png'),
('Coriander', 'PERADEX - Paraquat Dichloride', 'https://agribegri.com/products/peradex-1-litre--paraquat-dichloride-online--herbicide-online.php', 'https://agribegri.com/productimage/6d4a645072f5d455880dc0bb94e84287-02-01-20-15-06-15.png'),
('Castor', 'Monorin - Monocrotophos', 'https://agribegri.com/products/monocrotophos-36-sl-online--buy-insecticide-online--insecticide.php', 'https://img2.exportersindia.com/product_images/bc-full/dir_187/5607935/monocrotophos-36-sl-insecticide-1524197970-3792253.jpeg'),
('Tamarind', '', '', ''),
('Tomato', 'TRIFLURALIN ', 'https://jaishreerasayan.tradeindia.com/trifluralin-48-ec--1644347.html', 'https://www.adama.com/documents/1313470/4558499/Trifluarlin_packshot.png/f5a6a6f9-7d23-4b70-a4f0-9cc25b4f2055?t=1539229422713'),
('Ladies finger', 'Ema Gold Emamectin Benzoate', 'https://agribegri.com/products/online-buy-ema-gold-1-kg-emamectin-benzoate-5-sg-1-kg.php', 'https://cdn.shopify.com/s/files/1/0722/2059/products/EMA-GOLD_1_grande.jpg?v=1579883147'),
('Carrot', 'Oxyfluorfen', 'https://www.indiamart.com/proddetail/oxyfluorfen-herbicide-12195062291.html', 'https://4.imimg.com/data4/BE/MH/MY-9739155/oxyfluorfen-herbicide-500x500.jpg'),
('Greengram', 'Monorin - Monocrotophos', 'https://agribegri.com/products/monocrotophos-36-sl-online--buy-insecticide-online--insecticide.php', 'https://img2.exportersindia.com/product_images/bc-full/dir_187/5607935/monocrotophos-36-sl-insecticide-1524197970-3792253.jpeg'),
('Brinjal', 'Oxyfluorfen Herbicide', 'https://www.indiamart.com/proddetail/oxyfluorfen-herbicide-12195062291.html', 'https://4.imimg.com/data4/BE/MH/MY-9739155/oxyfluorfen-herbicide-500x500.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`m_no`);

--
-- Indexes for table `crop_area`
--
ALTER TABLE `crop_area`
  ADD PRIMARY KEY (`city`,`crop`),
  ADD KEY `crop` (`crop`);

--
-- Indexes for table `crop_details`
--
ALTER TABLE `crop_details`
  ADD PRIMARY KEY (`crop`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`Ctype`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `m_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
