using System.Runtime.Serialization;

namespace WcfT4Client.Data
{
    [DataContract]
    public class AdressDto
    {
        [DataMember]
        public string Street { get; set; }

        [DataMember]
        public string PostalCode { get; set; }

        [DataMember]
        public string City { get; set; }

        [DataMember]
        public string Country { get; set; }
    }
}