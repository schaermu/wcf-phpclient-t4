using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.Text;

namespace WcfT4Client.Data
{
    [DataContract]
    public class CustomerDto
    {
        [DataMember]
        public long Id { get; set; }
        [DataMember]
        public AdressDto Adress { get; set; }
        [DataMember]
        public string Name { get; set; }
        [DataMember]
        public DateTime Dob { get; set; }
    }
}
