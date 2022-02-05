using System.Net;

bool is_valid_IP(string ipAddres)
{
	string[] addres = ipAddres.Split(".");
	bool result = addres.Length == 4 ? IPAddress.TryParse(ipAddres, out IPAddress ip) : false;

	if (addres.Length == 4 && result)
		if (ipAddres == "0.0.0.0")
			return true;
		else
			for (int i = 0; i < addres.Length; i++)
				if ((addres[i].StartsWith("0") && addres[i].EndsWith("0")) || addres[i].StartsWith("0") || addres[i] == "0" || addres[i] == "00")
					return false;

	return result;
}